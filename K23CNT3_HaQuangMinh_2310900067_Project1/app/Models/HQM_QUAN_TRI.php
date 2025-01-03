<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HQM_QUAN_TRI extends Model
{
    use HasFactory;

    protected $table = "HQM_QUAN_TRI";

    protected $fillable = ['hqmTaiKhoan', 'hqmMatKhau', 'hqmTrangThai'];

    // Tắt timestamp nếu không cần
    public $timestamps = false;
}
