<?php

use Illuminate\Database\Seeder;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linh_vuc')->insert([
            ['ten_linh_vuc' => 'Khoa học kĩ thuật'],
            ['ten_linh_vuc' => 'Văn hóa-Xã hội-Nghệ thuật'],
            ['ten_linh_vuc' => 'Lịch sử-Địa lý'],
            ['ten_linh_vuc' => 'Thể thao']
        ]);
    }
}
