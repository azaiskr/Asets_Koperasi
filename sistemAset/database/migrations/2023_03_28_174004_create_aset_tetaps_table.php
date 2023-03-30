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
        Schema::create('aset_tetaps', function (Blueprint $table) {
            $table->integer('id_Aset');
            $table->string('nama_Aset');
            $table->string('lokasi');
            $table->string('kondisi');
            $table->integer('jumlah');
            $table->integer('ukuran');
            $table->integer('nilai_ekonomi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset_tetaps');
    }
};
