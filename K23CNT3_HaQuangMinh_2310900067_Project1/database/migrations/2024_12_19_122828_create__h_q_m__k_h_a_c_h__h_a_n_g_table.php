<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('HQM_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('hqmMaKhachHang',255)->unique();
            $table->string('hqmHoTenKhachHang',255);
            $table->string('hqmEmail',255);
            $table->string('hqmMatKhau',255);
            $table->string('hqmDienThoai',255);
            $table->string('hqmDiaChi',255);
            $table->dateTime('hqmNgayDangKy');
            $table->tinyInteger('hqmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HQM_KHACH_HANG');
    }
};
