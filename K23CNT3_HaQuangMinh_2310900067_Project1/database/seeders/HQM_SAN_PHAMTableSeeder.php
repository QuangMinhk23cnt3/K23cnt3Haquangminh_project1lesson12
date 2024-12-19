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
            'hqmMaSanPham'=> "VP001",
            'hqmTenSanPham'=> "Cây đỗ phú quý",
            'hqmHinhAnh'=>"images/san-pham/VP001.jpg",
            'hqmSoLuong'=>100,
            'hqmDonGia'=>699000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "VP002",
            'hqmTenSanPham'=> "Cây đại phú gia",
            'hqmHinhAnh'=>"images/san-pham/VP002.jpg",
            'hqmSoLuong'=>200,
            'hqmDonGia'=>550000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "VP003",
            'hqmTenSanPham'=> "Cây hạnh phúc",
            'hqmHinhAnh'=>"images/san-pham/VP003.jpg",
            'hqmSoLuong'=>150,
            'hqmDonGia'=>999999,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "VP004",
            'hqmTenSanPham'=> "Cây vạn lộc",
            'hqmHinhAnh'=>"images/san-pham/VP004.jpg",
            'hqmSoLuong'=>300,
            'hqmDonGia'=>799000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "PT001",
            'hqmTenSanPham'=> "Cây thiết mộc lan",
            'hqmHinhAnh'=>"images/san-pham/PT001.jpg",
            'hqmSoLuong'=>150,
            'hqmDonGia'=>590000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "PT002",
            'hqmTenSanPham'=> "Cây trường sinh",
            'hqmHinhAnh'=>"images/san-pham/PT002.jpg",
            'hqmSoLuong'=>100,
            'hqmDonGia'=>150000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "PT003",
            'hqmTenSanPham'=> "Cây hạnh phúc",
            'hqmHinhAnh'=>"images/san-pham/PT003.jpg",
            'hqmSoLuong'=>200,
            'hqmDonGia'=>299000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
        DB::table("HQM_SAN_PHAM")->insert([
            'hqmMaSanPham'=> "PT004",
            'hqmTenSanPham'=> "Cây hoa nhài(Lài ta)",
            'hqmHinhAnh'=>"images/san-pham/PT004.jpg",
            'hqmSoLuong'=>300,
            'hqmDonGia'=>199000,
            'hqmMaLoai'=>1,
            'hqmTrangThai'=>0
        ]);
    }
}
