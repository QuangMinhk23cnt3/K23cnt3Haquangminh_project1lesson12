<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HQM_KHACH_HANGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('HQM_KHACH_HANG')->insert([
            'hqmMaKhachHang'=>'KH001',
            'hqmHoTenKhachHang'=>'Ha Quang Minh',
            'hqmEmail'=>'saygex999@gmail.com',
            'hqmMatKhau'=>Hash::make('123456a@'), // Mã hóa mật khẩu
            'hqmDienThoai'=>'0987654321',
            'hqmDiaChi'=>'Ha Noi',
            'hqmNgayDangKy'=>'2024/12/31',
            'hqmTrangThai'=>0,
        ]);

        DB::table('HQM_KHACH_HANG')->insert([
            'hqmMaKhachHang'=>'KH002',
            'hqmHoTenKhachHang'=>'Phong',
            'hqmEmail'=>'phong@gmail.com',
            'hqmMatKhau'=>Hash::make('9999@abc'), // Mã hóa mật khẩu
            'hqmDienThoai'=>'0973634782',
            'hqmDiaChi'=>'TP Ho Chi Minh',
            'hqmNgayDangKy'=>'2024/12/12',
            'hqmTrangThai'=>0,
        ]);

        DB::table('HQM_KHACH_HANG')->insert([
            'hqmMaKhachHang'=>'KH003',
            'hqmHoTenKhachHang'=>'Tai',
            'hqmEmail'=>'tai@gmail.com',
            'hqmMatKhau'=>Hash::make('tai13366'), // Mã hóa mật khẩu
            'hqmDienThoai'=>'0982550508',
            'hqmDiaChi'=>'Zimbabue',
            'hqmNgayDangKy'=>'2024/12/17',
            'hqmTrangThai'=>2,
        ]);

        DB::table('HQM_KHACH_HANG')->insert([
            'hqmMaKhachHang'=>'KH004',
            'hqmHoTenKhachHang'=>'Son',
            'hqmEmail'=>'son@gmail.com',
            'hqmMatKhau'=>Hash::make('son12345@'), // Mã hóa mật khẩu
            'hqmDienThoai'=>'0983675921',
            'hqmDiaChi'=>'Trung Quoc',
            'hqmNgayDangKy'=>'2025/01/01',
            'hqmTrangThai'=>0,
        ]);
    }
}
