<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\LinhVuc;
use Illuminate\Support\Facades\DB;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Session::has('login') && Session::get('login') == true)
        // {
            $xoa = 0;
            $linhVuc = LinhVuc::all();
            return view('LinhVuc.ds_linh_vuc',compact('linhVuc'));
        // }
        // else
        //     return redirect('dang-nhap');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(Session::has('login') && Session::get('login') == true)
        // {
            // $thongBao =0;
            // return view('LinhVuc.them-moi-linh-vuc',compact('thongBao'));
        // }
        // else
        //     return redirect('dang-nhap');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if(Session::has('login') && Session::get('login') == true)
        // {
            $thongBao = 0;
            $validator = Validator::make($request->all(), [
                'ten_linh_vuc' => 'required|unique:linh_vuc|max:255',
            ]);
            if ($validator->fails()) {
                return redirect('linh-vuc')->with('error', 'Thêm thất bại!'); 
            }
            else
            {
                $max = DB::table('linh_vuc')->max('id') + 1; 
                DB::statement("ALTER TABLE linh_vuc AUTO_INCREMENT =  $max");
                $linhVuc = new LinhVuc();
                $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
                $linhVuc->save();
                return redirect('linh-vuc')->with('success', 'Thêm thành công!');
            }
        // }
        // else
        //     return redirect('dang-nhap');
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
        // if(Session::has('login') && Session::get('login') == true)
        // {
            // $cnLinhVuc = LinhVuc::find($id);
            // return view('LinhVuc.cap-nhat-linh-vuc',compact('cnLinhVuc'));
        // }
        // else
        //     return redirect('dang-nhap');
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
        $linhVuc = LinhVuc::find($id);
        $thongBao = 0;
        $validator = Validator::make($request->all(), [
            'ten_linh_vuc' => 'required|unique:linh_vuc|max:255',
        ]);
        if ($validator->fails()) {
            $capNhat = 1;
            $cnLinhVuc = $linhVuc;
            return redirect('linh-vuc')->with('error', 'Cập nhật không thành công!'); 
        }
        else
        {
            $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
            $linhVuc->save();
            return redirect('linh-vuc')->with('success', 'Cập nhật thành công!');
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
        // if(Session::has('login') && Session::get('login') == true)
        // {
            $linhVuc = LinhVuc::find($id);
            $linhVuc->delete();
            $linhVuc = LinhVuc::all();
            return redirect('linh-vuc')->with('success', 'Xóa thành công!');
        // }
        // else
        //     return redirect('dang-nhap');
    }

    public function bin()
    {
        // if(Session::has('login') && Session::get('login') == true)
        // {
            $linhVuc = LinhVuc::onlyTrashed()->get();
            return view('LinhVuc.thung-rac',compact('linhVuc'));   
        // }
        // else
        //     return redirect('dang-nhap');
    }

    public function restore($id)
    {
        $linhVuc = LinhVuc::withTrashed()->find($id);
        $linhVuc->restore();
        $linhVuc = LinhVuc::all();
        return redirect('linh-vuc')->with('success', 'Phục hồi thành công!');
    }

    public function delete($id)
    {
        $linhVuc = LinhVuc::withTrashed()->find($id);
        $linhVuc->forceDelete();
        $linhVuc = LinhVuc::all();
        return redirect('linh-vuc/thung-rac')->with('success', 'Xóa lĩnh vực khỏi thùng rác thành công!');
    }
}