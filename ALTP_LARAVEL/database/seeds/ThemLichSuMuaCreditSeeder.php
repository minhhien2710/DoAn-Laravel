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
            ['nguoi_choi_id'=>3,'goi_credit_id'=>1,'credit'=>100,'so_tien'=>100],
            ['nguoi_choi_id'=>3,'goi_credit_id'=>3,'credit'=>300,'so_tien'=>300],
            ['nguoi_choi_id'=>3,'goi_credit_id'=>4,'credit'=>400,'so_tien'=>400],
        ]);
    }
}
