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
            'hqmHoTenKhachHang'=>'Ha QUang Minh',
            'hqmEmail'=>'minh@gmail.com',
            'hqmDienThoai'=>'012550036',
            'hqmDiaChi'=>'Ha Noi',
            'hqmTongGiaTri'=>'790000',
            'hqmTrangThai'=>2,
        ]);

        DB::table('HQM_HOA_DON')->insert([
            'hqmMaHoaDon'=>'HD002',
            'hqmMaKhachHang'=>2,
            'hqmNgayHoaDon'=>'2024/12/20',
            'hqmNgayNhan'=>'2024/12/21',
            'hqmHoTenKhachHang'=>'Ha Minh QUang',
            'hqmEmail'=>'mquang@gmail.com',
            'hqmDienThoai'=>'012588868',
            'hqmDiaChi'=>'Zimbabue',
            'hqmTongGiaTri'=>'125000',
            'hqmTrangThai'=>0,
        ]);

        DB::table('HQM_HOA_DON')->insert([
            'hqmMaHoaDon'=>'HD003',
            'hqmMaKhachHang'=>3,
            'hqmNgayHoaDon'=>'2024/12/17',
            'hqmNgayNhan'=>'2024/12/17',
            'hqmHoTenKhachHang'=>'Quang Minh',
            'hqmEmail'=>'minhq@gmail.com',
            'hqmDienThoai'=>'0382550508',
            'hqmDiaChi'=>'Ha Noi',
            'hqmTongGiaTri'=>'999000',
            'hqmTrangThai'=>1,
        ]);

        DB::table('HQM_HOA_DON')->insert([
            'hqmMaHoaDon'=>'HD004',
            'hqmMaKhachHang'=>1,
            'hqmNgayHoaDon'=>'2024/12/12',
            'hqmNgayNhan'=>'2024/12/12',
            'hqmHoTenKhachHang'=>'Ha QUang Minh',
            'hqmEmail'=>'minh@gmail.com',
            'hqmDienThoai'=>'012550036',
            'hqmDiaChi'=>'Ha Noi',
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
