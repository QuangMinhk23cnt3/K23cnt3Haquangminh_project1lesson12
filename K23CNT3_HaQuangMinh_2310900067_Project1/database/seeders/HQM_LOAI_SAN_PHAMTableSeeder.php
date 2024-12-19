<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HQM_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('HQM_LOAI_SAN_PHAM')->insert([
            'hqmMaLoai'=> "L001",
            'hqmTenLoai'=>"Cây cảnh văn phòng",
            'hqmTrangThai'=>0
        ]);
        DB::table('HQM_LOAI_SAN_PHAM')->insert([
            'hqmMaLoai'=> "L002",
            'hqmTenLoai'=>"Cây để bàn",
            'hqmTrangThai'=>0
        ]);
        DB::table('HQM_LOAI_SAN_PHAM')->insert([
            'hqmMaLoai'=> "L003",
            'hqmTenLoai'=>"Cây cảnh phong thủy",
            'hqmTrangThai'=>0
        ]);
        DB::table('HQM_LOAI_SAN_PHAM')->insert([
            'hqmMaLoai'=> "L004",
            'hqmTenLoai'=>"Cây thủy canh",
            'hqmTrangThai'=>0
        ]);
    }
}
