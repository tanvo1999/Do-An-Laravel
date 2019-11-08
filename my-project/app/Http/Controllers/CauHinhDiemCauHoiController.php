<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\CauHinhDiemCauHoi;
use Illuminate\Support\Facades\DB;

class CauHinhDiemCauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diemCauHoi = CauHinhDiemCauHoi::all();
        return view('CauHinhDiemCauHoi.ds_cau_hinh_diem_cau_hoi',compact('diemCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CauHinhDiemCauHoi.them_cau_hinh_diem_cau_hoi');
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
                'thu_tu' =>'required|unique:cau_hinh_diem_cau_hoi',
                'diem'=>'required|unique:cau_hinh_diem_cau_hoi'
            ] , 
            [
                'thu_tu.required'=>"Bạn chưa nhập số thứ tự",
                'thu_tu.unique' =>"Số thứ tự bạn nhập đã tồn tại",
                'diem.required'=>"Bạn chưa nhập điểm",
                'diem.unique'=>"Số điểm bạn nhập đã tồn tại"
            ]);
        $cauHinhDiemCauHoi = new CauHinhDiemCauHoi();
        $cauHinhDiemCauHoi->thu_tu = $request->thu_tu;
        $cauHinhDiemCauHoi->diem = $request->diem;
        $cauHinhDiemCauHoi->save();

        return redirect('cau-hinh-diem-cau-hoi')->with('thongbao', 'Thêm thành công!');
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
}
