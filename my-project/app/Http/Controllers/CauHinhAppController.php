<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\CauHinhApp;

use Illuminate\Support\Facades\DB;

class CauHinhAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cauHinhApp = CauHinhApp::all();
        return view('CauHinhApp.ds_cau_hinh_app',compact('cauHinhApp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('CauHinhApp.them_cau_hinh_app');
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
                'co_hoi_sai' =>'required',
                'thoi_gian_tra_loi'=>'required|unique:cau_hinh_app'
            ] , 
            [
                'co_hoi_sai.required'=>"Bạn chưa nhập số lần cơ hội sai",
                'thoi_gian_tra_loi.required'=>"Bạn chưa nhập thời gian trả lời câu hỏi"
            ]);
        $cauHinhApp = new CauHinhApp();
        $cauHinhApp->co_hoi_sai = $request->co_hoi_sai;
        $cauHinhApp->thoi_gian_tra_loi = $request->thoi_gian_tra_loi;
        $cauHinhApp->save();

        return redirect('cau-hinh-app')->with('thongbao', 'Thêm thành công!');
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
                'co_hoi_sai' =>'required',
                'thoi_gian_tra_loi'=>'required'
            ] , 
            [
                'co_hoi_sai.required'=>"Bạn chưa nhập số lần cơ hội sai",
                'thoi_gian_tra_loi.required'=>"Bạn chưa nhập thời gian trả lời câu hỏi",
            ]);
        $cauHinhApp = CauHinhApp::find($id);
        $cauHinhApp->co_hoi_sai = $request->co_hoi_sai;
        $cauHinhApp->thoi_gian_tra_loi = $request->thoi_gian_tra_loi;
        $cauHinhApp->save();

        return redirect('cau-hinh-app')->with('thongbao', 'Sửa thành công!');
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
