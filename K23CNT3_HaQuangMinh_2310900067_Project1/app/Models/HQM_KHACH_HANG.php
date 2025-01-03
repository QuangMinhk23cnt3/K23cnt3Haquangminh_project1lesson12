<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class HQM_KHACH_HANG extends Model
{
    use HasFactory;
    use HasFactory;


    protected $table = 'HQM_KHACH_HANG';
    protected $primaryKey = 'hqmMaKhachHang'; // Đảm bảo rằng hqmMaKhachHang là khóa chính

    protected $fillable = [
        'hqmMaKhachHang', 'hqmHoTenKhachHang', 'hqmEmail', 'hqmMatKhau', 
        'hqmDienThoai', 'hqmDiaChi', 'hqmNgayDangKy', 'hqmTrangThai'
    ];

    public $incrementing = false; // Nếu hqmMaKhachHang không tự tăng thì bạn cần đặt false
    public $timestamps = true;

    protected $dates = ['hqmNgayDangKy'];

    public function setHqmMatKhauAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['hqmMatKhau'] = Hash::make($value);
        }
    }
}
