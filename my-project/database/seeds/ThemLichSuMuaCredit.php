<?php

use Illuminate\Database\Seeder;
use App\LichSuMuaCredit;

class ThemLichSuMuaCredit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $muaCredit = LichSuMuaCredit::create(
        	['nguoi_choi_id'=>1,'goi_credit_id'=>1,'credit'=>200,'so_tien'=>22000]
        );
        $muaCredit = LichSuMuaCredit::create(
        	['nguoi_choi_id'=>2,'goi_credit_id'=>5,'credit'=>400,'so_tien'=>45000]
        );
        $muaCredit = LichSuMuaCredit::create(
        	['nguoi_choi_id'=>4,'goi_credit_id'=>3,'credit'=>800,'so_tien'=>89000]
        );
        $muaCredit = LichSuMuaCredit::create(
            ['nguoi_choi_id'=>4,'goi_credit_id'=>4,'credit'=>1500,'so_tien'=>178900]
        );
        $muaCredit = LichSuMuaCredit::create(
            ['nguoi_choi_id'=>3,'goi_credit_id'=>2,'credit'=>400,'so_tien'=>4500]
        );
        $muaCredit = LichSuMuaCredit::create(
            ['nguoi_choi_id'=>6,'goi_credit_id'=>6,'credit'=>5000,'so_tien'=>456000]
        );
         $muaCredit = LichSuMuaCredit::create(
            ['nguoi_choi_id'=>8,'goi_credit_id'=>5,'credit'=>400,'so_tien'=>45000]
        );
          $muaCredit = LichSuMuaCredit::create(
            ['nguoi_choi_id'=>4,'goi_credit_id'=>6,'credit'=>5000,'so_tien'=>456000]
        );
         $muaCredit = LichSuMuaCredit::create(
            ['nguoi_choi_id'=>6,'goi_credit_id'=>4,'credit'=>1500,'so_tien'=>178900]
        );
         $muaCredit = LichSuMuaCredit::create(
            ['nguoi_choi_id'=>3,'goi_credit_id'=>2,'credit'=>400,'so_tien'=>4500]
        );
    }
}
