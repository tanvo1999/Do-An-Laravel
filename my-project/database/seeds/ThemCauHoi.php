<?php

use Illuminate\Database\Seeder;
use App\CauHoi;

class ThemCauHoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themCauHoi = CauHoi::create(
        	['noi_dung'=>'Công thức hóa học của đá vôi','linh_vuc_id'=>5,'phuong_an_a'=>'CaO','phuong_an_b'=>'CaCO3','phuong_an_c'=>'CaCl2','phuong_an_d'=>'Ca(OH)2','dap_an'=>'B']
        );
    }
}
