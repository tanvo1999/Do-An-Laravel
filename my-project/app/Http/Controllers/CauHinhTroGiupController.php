<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\CauHinhTroGiup;

use Illuminate\Support\Facades\DB;

class CauHinhTroGiupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cauHinhTroGiup = CauHinhTroGiup::all();
        return view('CauHinhTroGiup.ds_cau_hinh_tro_giup',compact('cauHinhTroGiup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //return view('CauHinhTroGiup.them_cau_hinh_tro_giup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
            [ 
                'loai_tro_giup' =>'required|unique:cau_hinh_tro_giup',
                'thu_tu'=>'required|unique:cau_hinh_tro_giup',
                'credit' =>'required'
            ] , 
            [
                'loai_tro_giup.required'=>"Bạn chưa nhập loại trợ giúp",
                'loai_tro_giup.unique'=>"Loại trợ giúp đã tồn tại",
                'thu_tu.required'=>"Bạn chưa nhập số thứ tự",
                'thu_tu.unique'=>"Số thứ tự đã tồn tại",
                'thu_tu.required'=>"Bạn chưa nhập số Credit"
            ]);
        $cauHinhTroGiup = new CauHinhTroGiup();
        $cauHinhTroGiup->loai_tro_giup = $request->loai_tro_giup;
        $cauHinhTroGiup->thu_tu = $request->thu_tu;
        $cauHinhTroGiup->credit = $request->credit;
        $cauHinhTroGiup->save();

        return redirect('cau-hinh-tro-giup')->with('thongbao', 'Thêm thành công!');
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
        $this->validate($request, 
            [ 
                'loai_tro_giup' =>'required',
                'thu_tu'=>'required',
                'credit' =>'required'
            ] , 
            [
                'loai_tro_giup.required'=>"Bạn chưa nhập loại trợ giúp",
                //'loai_tro_giup.unique'=>"Loại trợ giúp đã tồn tại",
                'thu_tu.required'=>"Bạn chưa nhập thứ tự",
                //'thu_tu.unique'=>"Thứ tự đã tồn tại",
                'credit.required'=>"Bạn chưa nhập số Credit"
            ]);
        $cauHinhTroGiup = CauHinhTroGiup::find($id);
        $cauHinhTroGiup->loai_tro_giup = $request->loai_tro_giup;
        $cauHinhTroGiup->thu_tu = $request->thu_tu;
        $cauHinhTroGiup->credit = $request->credit;
        $cauHinhTroGiup->save();

        return redirect('cau-hinh-tro-giup')->with('thongbao', 'Sửa thành công!');
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
}
