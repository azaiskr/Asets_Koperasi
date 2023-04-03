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
        Schema::create('aset_jual_beli', function (Blueprint $table) {
            $table->integer('id_aset');
            $table->string('nama_aset');
            $table->string('lokasi_jual');
            $table->integer('nilai_ekonomi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset_jual_belis');
    }
};
