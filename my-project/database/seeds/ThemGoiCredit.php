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
        $goiCredit = GoiCredit::create(
           ['ten_goi'=>'200 kim cương','credit'=>200,'so_tien'=>22000]
        );
         $goiCredit = GoiCredit::create(
           ['ten_goi'=>'400 kim cương','credit'=>400,'so_tien'=>45000]
        );
          $goiCredit = GoiCredit::create(
           ['ten_goi'=>'800 kim cương','credit'=>800,'so_tien'=>89000]
        );
           $goiCredit = GoiCredit::create(
           ['ten_goi'=>'1500 kim cương','credit'=>1500,'so_tien'=>178900]
        );
            $goiCredit = GoiCredit::create(
           ['ten_goi'=>'2500 kim cương','credit'=>2500,'so_tien'=>270000]
        );
             $goiCredit = GoiCredit::create(
           ['ten_goi'=>'5000 kim cương','credit'=>5000,'so_tien'=>456000]
        );
    }
}
