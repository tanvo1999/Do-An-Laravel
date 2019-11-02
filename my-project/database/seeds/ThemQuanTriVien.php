<?php

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
    		['ten_dang_nhap'=>'admin','mat_khau'=>'minhtan','ho_ten'=>'Võ Minh Tân'],
            ['ten_dang_nhap'=>'HoangSon','mat_khau'=>'0306171187','ho_ten'=>'Trần Hoàng Sơn'],
        ]);
    }
}
