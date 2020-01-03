<?php

use Illuminate\Database\Seeder;

class ThemQuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\QuanTriVien::create([
            'ten_dang_nhap' => 'admin',
            'mat_khau'      => Hash::make('3hteam'),
            'ho_ten'        => 'Quan Tri Vien',
            'anh_dai_dien'  => ''
        ]);

        App\QuanTriVien::create([
            'ten_dang_nhap' => 'mh2710',
            'mat_khau'      => Hash::make('123123'),
            'ho_ten'        => 'Minh Hiến',
            'anh_dai_dien'  => '01-46-51_02-01-2020_55167948.jpg'
        ]);
    }
}
