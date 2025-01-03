<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HQM_CT_HOA_DON extends Model
{
    use HasFactory;

    // Đặt tên bảng nếu khác mặc định
    protected $table = 'HQM_CT_HOA_DON';  // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id';  // Xác định khóa chính của bảng (mặc định là 'id')

    public $timestamps = true;  // Laravel tự động quản lý các cột created_at và updated_at

    // Các trường có thể được gán hàng loạt
    protected $fillable = [
        'hqmHoaDonID',   // Đảm bảo có trường hqmHoaDonID ở đây
        'hqmSanPhamID',
        'hqmSoLuongMua',
        'hqmDonGiaMua',
        'hqmThanhTien',
        'hqmTrangThai',
    ];

    // Quan hệ giữa bảng HQM_CT_HOA_DON và bảng HQM_SAN_PHAM
    // Quan hệ với bảng HQM_HOA_DON
    public function hqmhoaDon()
    {
        return $this->belongsTo(HQM_HOA_DON::class, 'hqmHoaDonID', 'id');
    }

    // Quan hệ với bảng HQM_SAN_PHAM
    public function hqmsanPham()
    {
        return $this->belongsTo(HQM_SAN_PHAM::class, 'hqmSanPhamID', 'id');
    }
}
