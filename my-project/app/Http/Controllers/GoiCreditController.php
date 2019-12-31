<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\GoiCredit;
use Illuminate\Support\Facades\DB;

class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goiCredit = GoiCredit::all();
        return view('GoiCredit.ds_goi_credit',compact('goiCredit'));
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
        $validator = Validator::make($request->all(), [
            'ten_goi' => 'required|unique:goi_credit|max:255',
            'credit' => 'required',
            'so_tien' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('goi-credit')->with('error', 'Thêm thất bại!'); 
        }
        else
        {
            $max = DB::table('goi_credit')->max('id') + 1; 
            DB::statement("ALTER TABLE goi_credit AUTO_INCREMENT =  $max");
            $goiCredit = new GoiCredit();
            $goiCredit->ten_goi = $request->ten_goi;
            $goiCredit->credit = $request->credit;
            $goiCredit->so_tien = $request->so_tien;
            $goiCredit->save();
            return redirect('goi-credit')->with('success', 'Thêm thành công!');
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
        $goiCredit = GoiCredit::find($id);
        $validator = Validator::make($request->all(), [
            'ten_goi' => 'required|unique:goi_credit|max:255',
            'credit' => 'required',
            'so_tien' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('goi-credit')->with('error', 'Cập nhật không thành công!'); 
        }
        else
        {
            $goiCredit->ten_goi = $request->ten_goi;
            $goiCredit->credit = $request->credit;
            $goiCredit->so_tien = $request->so_tien;
            $goiCredit->save();
            return redirect('goi-credit')->with('success', 'Cập nhật thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goiCredit = GoiCredit::find($id);
        $goiCredit->delete();
        return redirect('goi-credit')->with('success', 'Xóa thành công!');
    }

    public function bin()
    {
        $goiCredit = GoiCredit::onlyTrashed()->get();
        return view('GoiCredit.thung-rac',compact('goiCredit'));
    }

    public function restore($id)
    {
        $goiCredit = GoiCredit::withTrashed()->find($id);
        $goiCredit->restore();
        $goiCredit = GoiCredit::all();
        return redirect('goi-credit')->with('success', 'Phục hồi thành công!');
    }

    public function delete($id)
    {
        $goiCredit = GoiCredit::withTrashed()->find($id);
        $goiCredit->forceDelete();
        $goiCredit = GoiCredit::all();
        return redirect('goi-credit/thung-rac')->with('success', 'Xóa lĩnh vực khỏi thùng rác thành công!');
    }

}
