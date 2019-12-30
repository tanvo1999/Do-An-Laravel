<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\NguoiChoi;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoiChoi = NguoiChoi::all();
        return view('NguoiChoi.ds_nguoi_choi',compact('nguoiChoi'));
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

     public function ThongkeSoNguoiDangKi()
    {
        $nguoiChoi = NguoiChoi::whereMonth('created_at',Carbon::now()->month)->count('ten_dang_nhap');
        //$users = DB::table('nguoi_choi')->count('ten_dang_nhap')->whereMonth('created_at', '2019/12/28')->get();
        return view('ThongKe.thong-ke-dang-ki',compact('nguoiChoi'));
    }


     public function ThongkeNguoiChoiDiemCao()
    {
        $nguoiChoi = NguoiChoi::orderBy('diem_cao_nhat','desc')->take(5)->get();
        //$users = DB::table('nguoi_choi')->count('ten_dang_nhap')->whereMonth('created_at', '2019/12/28')->get();
        return view('ThongKe.thong-ke-nguoi-choi-diem-cao',compact('nguoiChoi'));
    }
}
