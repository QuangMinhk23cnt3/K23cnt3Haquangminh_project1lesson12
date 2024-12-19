<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HQM_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hqmMatkhau = md5("123456a@");
        DB::table('HQM_QUAN_TRI')->insert([
            'hqmTaiKhoan'=>"saygex999@gmail.com",
            'hqmMatKhau'=> $hqmMatkhau,
            'hqmTrangThai'=>0
        ]);
        DB::table('HQM_QUAN_TRI')->insert([
            'hqmTaiKhoan'=>"0846409694",
            'hqmMatKhau'=> $hqmMatkhau,
            'hqmTrangThai'=>0
        ]);
    }
}
