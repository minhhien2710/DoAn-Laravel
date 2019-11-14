<?php

use Illuminate\Database\Seeder;

class ThemLichSuMuaCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lich_su_mua_credit')->insert([
            ['nguoi_choi_id'=>1,'goi_credit_id'=>1,'credit'=>200,'so_tien'=>100000],
            ['nguoi_choi_id'=>1,'goi_credit_id'=>2,'credit'=>400,'so_tien'=>200000],
            ['nguoi_choi_id'=>1,'goi_credit_id'=>3,'credit'=>600,'so_tien'=>300000]
        ]);
    }
}
