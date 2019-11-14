<?php

use Illuminate\Database\Seeder;

class ThemGoiCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goi_credit')->insert([
            ['ten_goi'=>'C100','credit'=>200,'so_tien'=>100000],
            ['ten_goi'=>'C200','credit'=>400,'so_tien'=>200000],
            ['ten_goi'=>'C300','credit'=>600,'so_tien'=>300000]
        ]);
    }
}
