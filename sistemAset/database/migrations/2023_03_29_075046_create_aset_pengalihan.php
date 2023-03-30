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
        Schema::create('aset_pengalihan', function (Blueprint $table) {
            $table->integer('id_Aset');
            $table->string('nama_Aset');
            $table->string('jenis_Pengalihan');
            $table->string('jumlah');
            $table->integer('lokas_Pengalihan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset_pengalihan');
    }
};
