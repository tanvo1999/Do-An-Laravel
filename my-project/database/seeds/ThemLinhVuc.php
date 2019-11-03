<?php

use Illuminate\Database\Seeder;
use App\LinhVuc;

class ThemLinhVuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linhVuc = LinhVuc::create(
        	['ten_linh_vuc'=>'Thể Thao']
        );
        $linhVuc = LinhVuc::create(
        	['ten_linh_vuc'=>'Âm nhạc']
        );
        $linhVuc = LinhVuc::create(
        	['ten_linh_vuc'=>'Lịch sử']
        );
        $linhVuc = LinhVuc::create(
        	['ten_linh_vuc'=>'Địa lý']
        );
        $linhVuc = LinhVuc::create(
        	['ten_linh_vuc'=>'Văn học']
        );
         $linhVuc = LinhVuc::create(
            ['ten_linh_vuc'=>'Động Vật']
        );
          $linhVuc = LinhVuc::create(
            ['ten_linh_vuc'=>'Văn hoá']
        );
           $linhVuc = LinhVuc::create(
            ['ten_linh_vuc'=>'Thực Vật']
        );
    }
}
