<?php

use Illuminate\Database\Seeder;
use App\GoiCredit;

class ThemGoiCredit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themGoiCredit = GoiCredit::create(
        	['ten_goi'=>'Gói 1','credit'=>500,'so_tien'=>50000]
        );
        $themGoiCredit = GoiCredit::create(
        	['ten_goi'=>'Gói 2','credit'=>1100,'so_tien'=>100000]
        );
        $themGoiCredit = GoiCredit::create(
        	['ten_goi'=>'Gói 3','credit'=>2500,'so_tien'=>200000]
        );
    }
}
