<?php

use Illuminate\Database\Seeder;
use App\CauHinhTroGiup;

class ThemCauHinhTroGiup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$cauHinhTroGiup = CauHinhTroGiup::create(
        	['loai_tro_giup'=>'Xin ý kiến khán giả trường quay','thu_tu'=>1, 'credit'=>50]
        );
        $cauHinhTroGiup = CauHinhTroGiup::create(
        	['loai_tro_giup'=>'Hỏi tổ tư vấn ở trường quay','thu_tu'=>2, 'credit'=>100]
        );
        $cauHinhTroGiup = CauHinhTroGiup::create(
        	['loai_tro_giup'=>'50:50','thu_tu'=>3, 'credit'=>150]
        );
        $cauHinhTroGiup = CauHinhTroGiup::create(
        	['loai_tro_giup'=>'Gọi điện cho người thân','thu_tu'=>4, 'credit'=>200]
        );
    }
}
