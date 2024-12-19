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
        Schema::create('HQM_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('hqmMaLoai',255)->unique();
            $table->string('hqmTenLoai',255);
            $table->tinyInteger('hqmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HQM_LOAI_SAN_PHAM');
    }
};
