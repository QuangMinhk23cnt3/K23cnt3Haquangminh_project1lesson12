<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HQM_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('HQM_HOA_DON')->insert([
            'hqmMaHoaDon'=>'HD001',
            'hqmMaKhachHang'=>1,
            'hqmNgayHoaDon'=>'2024/12/12',
            'hqmNgayNhan'=>'2024/12/12',
            'hqmHoTenKhachHang'=>'Vũ Tiến Đức',
            'hqmEmail'=>'vuducc@gmail.com',
            'hqmDienThoai'=>'012550036',
            'hqmDiaChi'=>'Yên Bái-Yên Bình',
            'hqmTongGiaTri'=>'790000',
            'hqmTrangThai'=>2,
        ]);

        DB::table('HQM_HOA_DON')->insert([
            'hqmMaHoaDon'=>'HD002',
            'hqmMaKhachHang'=>2,
            'hqmNgayHoaDon'=>'2024/12/20',
            'hqmNgayNhan'=>'2024/12/21',
            'hqmHoTenKhachHang'=>'Trần Tuấn Hưng',
            'hqmEmail'=>'hungtran@gmail.com',
            'hqmDienThoai'=>'012588868',
            'hqmDiaChi'=>'Phú Thọ',
            'hqmTongGiaTri'=>'125000',
            'hqmTrangThai'=>0,
        ]);

        DB::table('HQM_HOA_DON')->insert([
            'hqmMaHoaDon'=>'HD003',
            'hqmMaKhachHang'=>3,
            'hqmNgayHoaDon'=>'2024/12/17',
            'hqmNgayNhan'=>'2024/12/17',
            'hqmHoTenKhachHang'=>'Phan Quang Minh',
            'hqmEmail'=>'pminh@gmail.com',
            'hqmDienThoai'=>'0382550508',
            'hqmDiaChi'=>'Phú Thọ',
            'hqmTongGiaTri'=>'999000',
            'hqmTrangThai'=>1,
        ]);

        DB::table('HQM_HOA_DON')->insert([
            'hqmMaHoaDon'=>'HD004',
            'hqmMaKhachHang'=>1,
            'hqmNgayHoaDon'=>'2024/12/12',
            'hqmNgayNhan'=>'2024/12/12',
            'hqmHoTenKhachHang'=>'Vũ Tiến Đức',
            'hqmEmail'=>'vuducc@gmail.com',
            'hqmDienThoai'=>'012550036',
            'hqmDiaChi'=>'Yên Bái-Yên Bình',
            'hqmTongGiaTri'=>'660000',
            'hqmTrangThai'=>1,
        ]);

        DB::table('HQM_HOA_DON')->insert([
            'hqmMaHoaDon'=>'HD005',
            'hqmMaKhachHang'=>4,
            'hqmNgayHoaDon'=>'2024/12/03',
            'hqmNgayNhan'=>'2024/12/04',
            'hqmHoTenKhachHang'=>'Phạm Tùng Quân',
            'hqmEmail'=>'quanpham@gmail.com',
            'hqmDienThoai'=>'094357152',
            'hqmDiaChi'=>'Hà Nội',
            'hqmTongGiaTri'=>'777999',
            'hqmTrangThai'=>1,
        ]);
    }
}
