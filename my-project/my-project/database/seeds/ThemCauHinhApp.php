<?php

use Illuminate\Database\Seeder;
use App\CauHinhApp;

class ThemCauHinhApp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cauHinhApp = CauHinhApp::create(
        	['co_hoi_sai'=>3, 'thoi_gian_tra_loi'=>30]
        );
    }
}
