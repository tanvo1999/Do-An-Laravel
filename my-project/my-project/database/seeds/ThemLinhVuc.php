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
        	['ten_linh_vuc'=>'Lập trình']
        );
        $linhVuc = LinhVuc::create(
        	['ten_linh_vuc'=>'Toán']
        );
        $linhVuc = LinhVuc::create(
        	['ten_linh_vuc'=>'Hóa học']
        );
    }
}
