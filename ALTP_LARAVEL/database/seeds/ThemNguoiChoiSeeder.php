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
        App\NguoiChoi::create([
            'ten_dang_nhap' => 'user1',
            'mat_khau'      => Hash::make('123123'),
            'email'         => 'user1@gmail.com',
            'anh_dai_dien'  => '',
            'diem_cao_nhat' => 0,
            'credit'        => 0
        ]);

        App\NguoiChoi::create([
            'ten_dang_nhap' => 'user2',
            'mat_khau'      => Hash::make('123123'),
            'email'         => 'user2@gmail.com',
            'anh_dai_dien'  => '',
            'diem_cao_nhat' => 0,
            'credit'        => 0
        ]);
    }
}
