<?php

use Illuminate\Database\Seeder;

class CuaHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CuaHang')->insert([
            ['Ten' => 'FPTShop','DiaChi' => 'Hà Nội', 'SoDienThoai' =>'888888'],
            ['Ten' => 'Thế Giới Di Động','DiaChi' => 'Hà Nội', 'SoDienThoai' =>'888888'],
            ['Ten' => 'Trần Anh','DiaChi' => 'Hà Nội', 'SoDienThoai' =>'888888']
        ]);
    }
}
