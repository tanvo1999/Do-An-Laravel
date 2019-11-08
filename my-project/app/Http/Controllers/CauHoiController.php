<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\CauHoi;
use App\LinhVuc;
use Illuminate\Support\Facades\DB;


class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cauHoi = CauHoi::all();
        return view('CauHoi.ds_cau_hoi',compact('cauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsLinhVuc = LinhVuc::all();
        return view('CauHoi.them-moi-cau-hoi',compact('dsLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'noi_dung' => 'required|unique:cau_hoi',
            'linh_vuc_id' =>'required',
            'phuong_an_a' =>'required',
            'phuong_an_b' =>'required',
            'phuong_an_c' =>'required',
            'phuong_an_d' =>'required',
            'dap_an' =>'required',
        ]);
        if ($validator->fails()) {
            return redirect('cau-hoi')->with('error', 'Thêm thất bại!'); 
        }
        else
        {
            $max = DB::table('cau_hoi')->max('id') + 1; 
            DB::statement("ALTER TABLE cau_hoi AUTO_INCREMENT =  $max");
            $cauHoi = new CauHoi();
            $cauHoi->noi_dung = $request->noi_dung;
            $cauHoi->linh_vuc_id = $request->linh_vuc_id;
            $cauHoi->phuong_an_a = $request->phuong_an_a;
            $cauHoi->phuong_an_b = $request->phuong_an_b;
            $cauHoi->phuong_an_c = $request->phuong_an_c;
            $cauHoi->phuong_an_d = $request->phuong_an_d;
            $cauHoi->dap_an = $request->dap_an;
            $cauHoi->save();
            return redirect('cau-hoi')->with('success', 'Thêm thành công!');
        }
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
        $cauHoi = CauHoi::find($id);
        $cauHoi->delete();
        $cauHoi = CauHoi::all();
        return redirect('cau-hoi')->with('success', 'Xóa thành công!');
    }

    public function bin()
    {
        $cauHoi = CauHoi::onlyTrashed()->get();
        return view('CauHoi.thung-rac',compact('cauHoi'));   
    }

    public function restore($id)
    {
        $cauHoi = CauHoi::withTrashed()->find($id);
        $cauHoi->restore();
        $cauHoi = CauHoi::all();
        return redirect('cau-hoi')->with('success', 'Phục hồi thành công!');
    }

    public function delete($id)
    {
        $cauHoi = CauHoi::withTrashed()->find($id);
        $cauHoi->forceDelete();
        $cauHoi = CauHoi::all();
        return redirect('cau-hoi/thung-rac')->with('success', 'Xóa lĩnh vực khỏi thùng rác thành công!');
    }
}
