<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\NguoiChoi;

class ThemNguoiChoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themNguoiChoi = NguoiChoi::create(
        	['ten_dang_nhap'=>'test','mat_khau'=>Hash::make('test'),'email'=>'test@gmail.com','hinh_dai_dien'=>'null','diem_cao_nhat'=>0,'credit'=>1000]
        );
    }
}
