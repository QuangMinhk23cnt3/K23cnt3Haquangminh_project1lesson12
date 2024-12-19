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
        Schema::create('HQM_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hqmHoaDonID')->references('id')->on('HQM_HOA_DON');
            $table->bigInteger('hqmSanPhamID')->references('id')->on('HQM_SAN_PHAM');
            $table->integer('hqmSoLuongMua');
            $table->float('hqmDonGiaMua');
            $table->float('hqmThanhTien');
            $table->tinyInteger('hqmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HQM_CT_HOA_DON');
    }
};
