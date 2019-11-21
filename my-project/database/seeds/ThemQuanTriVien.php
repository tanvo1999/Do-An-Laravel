<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\QuanTriVien;

class ThemQuanTriVien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('quan_tri_vien')->insert([
    		['ten_dang_nhap'=>'admin','mat_khau'=>Hash::make('minhtan'),'ho_ten'=>'Võ Minh Tân'],
            ['ten_dang_nhap'=>'HoangSon','mat_khau'=>Hash::make('0306171187'),'ho_ten'=>'Trần Hoàng Sơn'],
	['ten_dang_nhap'=>'baothien','mat_khau'=>Hash::make('baothien'),'ho_ten'=>'Phạm Bảo Thiện'],
        ]);
    }
}