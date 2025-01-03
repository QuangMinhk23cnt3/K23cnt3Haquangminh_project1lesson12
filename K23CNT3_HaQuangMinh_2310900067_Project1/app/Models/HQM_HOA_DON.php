<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HQM_HOA_DON extends Model
{
    use HasFactory;

    // Đặt tên bảng nếu khác mặc định
    protected $table = 'HQM_HOA_DON';  // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id';  // Xác định khóa chính của bảng (mặc định là 'id')

    public $timestamps = true;  // Laravel tự động quản lý các cột created_at và updated_at

    // Các trường có thể được gán hàng loạt
    protected $fillable = [
        'hqmMaHoaDon', 'hqmMaKhachHang', 'hqmNgayHoaDon', 'hqmNgayNhan',
        'hqmHoTenKhachHang', 'hqmEmail', 'hqmDienThoai', 'hqmDiaChi',
        'hqmTongGiaTri', 'hqmTrangThai',
    ];

    // Quan hệ với bảng HQM_KHACH_HANG
    public function khachHang()
    {
        return $this->belongsTo(HQM_KHACH_HANG::class, 'hqmMaKhachHang', 'id');
    }

    // Quan hệ với bảng HQM_CT_HOA_DON
    public function chiTietHoaDon()
    {
        return $this->hasMany(HQM_CT_HOA_DON::class, 'hqmHoaDonID', 'id');
    }
}
