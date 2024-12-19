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
        Schema::create('HQM_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('hqmMaSanPham',255)->unique();
            $table->string('hqmTenSanPham',255);
            $table->string('hqmHinhAnh',255);
            $table->integer('hqmSoLuong');
            $table->float('hqmDonGia');
            $table->bigInteger('hqmMaLoai')->references('id')->on('HQM_LOAI_SAN_PHAM');
            $table->tinyInteger('hqmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HQM_SAN_PHAM');
    }
};
