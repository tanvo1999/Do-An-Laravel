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
        $themQuanTriVien = QuanTriVien::create(
    		['ten_dang_nhap'=>'admin','mat_khau'=>'minhtan','ho_ten'=>'Võ Minh Tân']
        );
    }
}
