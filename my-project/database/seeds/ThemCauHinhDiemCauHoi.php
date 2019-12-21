<?php

use Illuminate\Database\Seeder;
use App\CauHinhDiemCauHoi;

class ThemCauHinhDiemCauHoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>1,'diem'=>100]
        );
    }
}
