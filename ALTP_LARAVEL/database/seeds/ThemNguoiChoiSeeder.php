<?php

use Illuminate\Database\Seeder;

class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nguoi_choi')->insert([
            ['ten_dang_nhap'=>'henrylu489','mat_khau'=>'matkhaulasao','email'=>'quochuy090698@gmail.com','anh_dai_dien'=>'','diem_cao_nhat'=>99999999,'credit'=>99999]
        ]);
    }
}
