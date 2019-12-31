<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LichSuMuaCredit;
use Carbon\Carbon;

class MuaCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function ThongKeDoanhThu()
    {
        $lichSuMuaCredit = LichSuMuaCredit::whereMonth('created_at',Carbon::now()->month)->sum('so_tien');
        return view('ThongKe.thong-ke-doanh-thu',compact('lichSuMuaCredit'));
    }

    public function ThongkeNguoiMuaCredit()
    {
        // $lichSuMuaCredit = LichSuMuaCredit::select ('*',DB::raw('SUM(so_tien) as tong_tien'))->orderBy('so_tien','desc')->groupBy('nguoi_choi_id')->get();

        $lichSuMuaCredit = LichSuMuaCredit::
        join('nguoi_choi','lish_su_mua_credit.nguoi_choi_id','=','nguoi_choi.id')
        ->select('lish_su_mua_credit.id','nguoi_choi.ten_dang_nhap',DB::raw('SUM(lish_su_mua_credit.so_tien) as tong_tien'))
        ->orderBy('lish_su_mua_credit.so_tien','desc')
        ->groupBy('lish_su_mua_credit.nguoi_choi_id')->take(10)->get();
        
        // $lichSuMuaCredit = LichSuMuaCredit::groupBy('nguoi_choi_id')->having('so_tien','>',56000)->get();

        return view('ThongKe.thong-ke-nguoi-mua-credit',compact('lichSuMuaCredit'));
    }
}
