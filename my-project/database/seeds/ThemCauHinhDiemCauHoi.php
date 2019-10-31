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
        	['thu_tu'=>1,'diem'=>200]
        );
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>2,'diem'=>300]
        );
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>3,'diem'=>500]
        );
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>4,'diem'=>1000]
        );
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>5,'diem'=>2000]
        );
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>6,'diem'=>3500]
        );
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>7,'diem'=>6000]
        );
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>8,'diem'=>9000]
        );
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>9,'diem'=>13000]
        );
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::create(
        	['thu_tu'=>10,'diem'=>20000]
        );
    }
}
