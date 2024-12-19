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
        Schema::create('HQM_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('hqmMaHoaDon',255)->unique();
            $table->bigInteger('hqmMaKhachHang')->references('id')->on('HQM_KHACH_HANG');
            $table->dateTime('hqmNgayHoaDon');
            $table->dateTime('hqmNgayNhan');
            $table->string('hqmHoTenKhachHang',255);
            $table->string('hqmEmail',255);
            $table->string('hqmDienThoai',255);
            $table->string('hqmDiaChi',255);
            $table->float('hqmTongTriGia');
            $table->tinyInteger('hqmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HQM_HOA_DON');
    }
};
