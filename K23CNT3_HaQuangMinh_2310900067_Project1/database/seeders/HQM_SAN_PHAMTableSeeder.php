<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HQM_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "C001",
            'hqmTenSanPham'=> "Cho Vang",
            'hqmHinhAnh'=>"img/san_pham/cho1.png",
            'hqmSoLuong'=>100,
            'hqmDonGia'=>699000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "C002",
            'hqmTenSanPham'=> "Cho 2",
            'hqmHinhAnh'=>"img/san_pham/cho2.png",
            'hqmSoLuong'=>200,
            'hqmDonGia'=>550000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "C003",
            'hqmTenSanPham'=> "Cho Pug",
            'hqmHinhAnh'=>"img/san_pham/cho3.png",
            'hqmSoLuong'=>150,
            'hqmDonGia'=>999999,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "C004",
            'hqmTenSanPham'=> "Cho Husky",
            'hqmHinhAnh'=>"img/san_pham/cho4.png",
            'hqmSoLuong'=>300,
            'hqmDonGia'=>799000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "C005",
            'hqmTenSanPham'=> "Cho 5",
            'hqmHinhAnh'=>"img/san_pham/cho5.png",
            'hqmSoLuong'=>150,
            'hqmDonGia'=>590000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "C006",
            'hqmTenSanPham'=> "Cho 6",
            'hqmHinhAnh'=>"img/san_pham/cho6.png",
            'hqmSoLuong'=>100,
            'hqmDonGia'=>150000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "C007",
            'hqmTenSanPham'=> "Cho 7",
            'hqmHinhAnh'=>"img/san_pham/cho7.png",
            'hqmSoLuong'=>200,
            'hqmDonGia'=>299000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "C008",
            'hqmTenSanPham'=> "Cho 8",
            'hqmHinhAnh'=>"img/san_pham/cho8.png",
            'hqmSoLuong'=>300,
            'hqmDonGia'=>199000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
    }
}
