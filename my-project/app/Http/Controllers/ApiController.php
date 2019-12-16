<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;
use Illuminate\Support\Facades\Validator;
use App\LinhVuc;
use App\CauHoi;
use App\Gredit;
use App\NguoiChoi;
use App\ChiTietLuotChoi;
use App\LuotChoi;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request) {

        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau=$request->mat_khau;
        if (!$token = auth('api')->attempt(['ten_dang_nhap' => $ten_dang_nhap,'password' => $mat_khau])) {
            // if the credentials are wrong we send an unauthorized error in json format
            return response()->json([
                'success' => false,
                'messager'=>"Đăng nhập thất bại",
            ]);
        }
        return response()->json([
            'success'=>true,
            'messager'=>"Đăng nhập thành công",
            'token' => $token,
        ]);
    }

    public function quenMatKhau(Request $request) {
        $kq = NguoiChoi::where('ten_dang_nhap','=',$request->ten_dang_nhap)->first();

        if ($kq == null) {
            return response()->json([
                'success' => false,
                'messager'=>"Tài khoản không tồn tại",
            ]);
        }
        else if ($request->email != $kq->email){
            return response()->json([
                'success' => false,
                'messager'=>"Email không trùng khớp",
            ]);
        }
        return response()->json([
            'success'=>true,
            'messager'=>"Mật khẩu mới đã gửi vào mail của bạn"
        ]);
    }

    public function capNhat(Request $request, $id) {
        $nguoiChoi = NguoiChoi::find($id);
        $kq = NguoiChoi::where('ten_dang_nhap','=',$request->ten_dang_nhap)->first();

        $validator = Validator::make($request->all(), [
            'mat_khau' => 'required|max:32',
            'email' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messager'=>"Cập nhật thất bại",
            ]);
        }
        else
        {
            $nguoiChoi->email = $request->email;
            $nguoiChoi->hinh_dai_dien = $request->hinh_dai_dien;
            $nguoiChoi->mat_khau = Hash::make($request->mat_khau);
            $nguoiChoi->save();
            if(!$token = auth('api')->attempt(['ten_dang_nhap' => $request->ten_dang_nhap,'password' => $request->mat_khau]))
            {
                return response()->json([
                    'success' => false,
                    'messager'=>"Cập nhật thất bại",
                ]); 
            }
            else
            {
                return response()->json([
                    'success' => true,
                    'messager'=>"Cập nhật thành công",
                    'token' => $token,
                ]); 
            }
        }
    }

    public function getUserInfo(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json($user);
    }

    public function layLV(/*Request $request*/)
    {
        //$user = JWTAuth::toUser($request->token);
        $linhVuc = LinhVuc::all()->random(4);
        $result = [
            'success'=>true,
            'data' => $linhVuc
        ];
        return response()->json($result);
    }

    public function layLichSuChoiGame(Request $request)
    {
        $user = JWTAuth::toUser($request->token);
        $luotChoi = LuotChoi::withTrashed()->where('nguoi_choi_id','=',$user->id)->get();
        if(sizeof($luotChoi)>0){
            $result = [
                'success'=>true,
                'data' => $luotChoi
            ];
        }
        else
        {
            $result = [
                'success'=>false
            ];
        }
        return response()->json($result);
    }

    public function luuLuotChoi(Request $request)
    {
        $user = JWTAuth::toUser($request->token);
        $luotChoi = new LuotChoi();
        $luotChoi->nguoi_choi_id = $user->id;
        $luotChoi->so_cau = $request->so_cau;
        $luotChoi->diem = $request->diem;
        $luotChoi->ngay_gio = $luotChoi->created_at;

        $luotChoi->save();

        return response()->json([
            'success' => true
        ]);
    }

    public function chiTietLuotChoi(Request $request)
    {
        $user = JWTAuth::toUser($request->token);
        $ctluotChoi = new ChiTietLuotChoi();
        $ctluotChoi->luot_choi_id = $user->id;
        $ctluotChoi->cau_hoi_id = $request->cau_hoi_id;
        $ctluotChoi->phuong_an = $request->phuong_an;
        $ctluotChoi->diem = $request->diem;

        $ctluotChoi->save();

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function laycauhoi($id){
       // $cauhoi = CauHoi::find($id);

        //$user = JWTAuth::toUser($request->token);
        $cauhoi = CauHoi::where('linh_vuc_id',$id)->get()->random(1);
        $result = [
            'success'=>true,
            'data'=>$cauhoi
        ];
        return response()->json($result);
    }

    public function layCredit(/*Request $request*/){
        //$user = JWTAuth::toUser($request->token);
        $Gredit = Gredit()::all();

        $result= [
            'success'=>true,
            'data'=>$Gredit
        ];
        return response()->json($result);
    }

    public function UploadImg(Request $request){
        if($request->hasFile('uploaded_file')){
            $file = $request->uploaded_file;
            $file->store('image');
            return $file->getClientOriginalName();
        }
        return 'Fail';
    }
    public function Dangky(Request $request){
     $nguoichoi = new NguoiChoi();

     $nguoichoi->ten_dang_nhap = $request->ten_dang_nhap;
     $nguoichoi->mat_khau = Hash::make($request->mat_khau);
     $nguoichoi->email=$request->email;
     $nguoichoi->hinh_dai_dien = $request->hinh_dai_dien;
     $nguoichoi->diem_cao_nhat = 0;
     $nguoichoi->credit = 1000;
     $nguoichoi->save();
     return 'Success';
    }
}