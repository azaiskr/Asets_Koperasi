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
        Schema::create('aset_perbaikans', function (Blueprint $table) {
            $table->integer('id_aset')->unique();
            $table->string('nama_aset');
            $table->enum('status_perbaikan',['OK', 'Diperbaiki']);
            $table->date('tanggal_perbaikan');
            $table->integer('pj_perbaikan');
            $table->foreign('pj_perbaikan')->references('id_pj')->on('pj_perbaikans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset_perbaikans');
    }
};
