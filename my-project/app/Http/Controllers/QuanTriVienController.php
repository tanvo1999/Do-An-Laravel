<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\QuanTriVien;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quanTriVien = QuanTriVien::all();
        return view('QuanTriVien.ds_quan_tri_vien',compact('quanTriVien'));
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

    public function login()
    {
        return view('dang_nhap');
    }
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login')->with('success', 'Đăng xuất thành công!');;
    }

    public function xuly(Request $request)
    {
        $qtv = QuanTriVien::where('ten_dang_nhap','=',$request->ten_dang_nhap )->first();
        if ($qtv == null || $qtv->ten_dang_nhap != $request->ten_dang_nhap) {
            return redirect('dang-nhap')->with('error', 'Tài khoản không tồn tại!');
        }
        else if($qtv->mat_khau != $request->mat_khau){
            return redirect('dang-nhap')->with('error', 'Sai mật khẩu!');
        }
        Auth::login($qtv);
        session()->put('login', true);
        session()->put('ho_ten', $qtv->ho_ten);
        return redirect('linh-vuc')->with('success','Đăng nhập thành công!');



        // if (Auth::attempt($thongTin)) {
        //     return redirect('linh-vuc');
        // }
        // return redirect('dang-nhap')->with('error', 'Sai mật khẩu!');



        // $validator = Validator::make($request->all(), [
        //     'ten_dang_nhap' => 'unique:quan_tri_vien',
        // ]);
        // if ($validator->fails()) {
        //     $pass = $request->mat_khau;
        //     $matkhau = QuanTriVien::where('ten_dang_nhap','=',$request->ten_dang_nhap )->first();
        //     if( $matkhau->mat_khau == $pass) {
        //         session()->put('login', true);
        //         session()->put('ho_ten', $matkhau->ho_ten);
        //         return redirect('linh-vuc');
        //     } else {
        //         return redirect('dang-nhap')->with('error', 'Sai mật khẩu!');
        //     }
        // }
        // else
        // {
        //     return redirect('dang-nhap')->with('error', 'Tài khoản không tồn tại!');
        // }



        // $pass = $request->mat_khau;
        // $matkhau = QuanTriVien::where('ten_dang_nhap','=',$request->ten_dang_nhap )->first();
        // if ($matkhau->ten_dang_nhap == $request->ten_dang_nhap) {
        //     if( $matkhau->mat_khau == $pass) {
        //         session()->put('login', true);
        //         session()->put('ho_ten', $matkhau->ho_ten);
        //         return redirect('linh-vuc');
        //     } else {
        //         return redirect('dang-nhap')->with('error', 'Sai mật khẩu!');
        //     }
        // }
        // else
        // {
        //     return redirect('dang-nhap')->with('error', 'Tài khoản không tồn tại!');
        // }
    }
}
