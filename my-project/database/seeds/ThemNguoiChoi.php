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

        $themNguoiChoi = NguoiChoi::create(
            ['ten_dang_nhap'=>'huy','mat_khau'=>Hash::make('huy'),'email'=>'huy@gmail.com','hinh_dai_dien'=>'null','diem_cao_nhat'=>600,'credit'=>5000]
        );

        $themNguoiChoi = NguoiChoi::create(
            ['ten_dang_nhap'=>'quy','mat_khau'=>Hash::make('quy'),'email'=>'quy@gmail.com','hinh_dai_dien'=>'null','diem_cao_nhat'=>800,'credit'=>2000]
        );

        $themNguoiChoi = NguoiChoi::create(
            ['ten_dang_nhap'=>'hieu','mat_khau'=>Hash::make('hieu'),'email'=>'hieu@gmail.com','hinh_dai_dien'=>'null','diem_cao_nhat'=>569,'credit'=>7000]
        );

        $themNguoiChoi = NguoiChoi::create(
            ['ten_dang_nhap'=>'hau','mat_khau'=>Hash::make('hau'),'email'=>'hau@gmail.com','hinh_dai_dien'=>'null','diem_cao_nhat'=>763,'credit'=>8000]
        );

        $themNguoiChoi = NguoiChoi::create(
            ['ten_dang_nhap'=>'thuan','mat_khau'=>Hash::make('thuan'),'email'=>'thuan@gmail.com','hinh_dai_dien'=>'null','diem_cao_nhat'=>6320,'credit'=>5000]
        );

         $themNguoiChoi = NguoiChoi::create(
            ['ten_dang_nhap'=>'hoa','mat_khau'=>Hash::make('hoa'),'email'=>'hoa@gmail.com','hinh_dai_dien'=>'null','diem_cao_nhat'=>2320,'credit'=>9000]
        );


        $themNguoiChoi = NguoiChoi::create(
            ['ten_dang_nhap'=>'nhu','mat_khau'=>Hash::make('nhu'),'email'=>'nhu@gmail.com','hinh_dai_dien'=>'null','diem_cao_nhat'=>5320,'credit'=>560000]
        );
    }
}
