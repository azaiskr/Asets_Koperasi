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
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('IDBuku');
            $table->string('Judul');
            $table->string('Penulis');
            $table->string('Penerbit');
            $table->year('TahunTerbit');
            $table->integer('JumlahStok');
            $table->integer('DendaBuku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
