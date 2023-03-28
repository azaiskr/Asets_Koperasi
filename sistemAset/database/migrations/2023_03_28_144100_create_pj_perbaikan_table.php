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
        Schema::create('pj_perbaikan', function (Blueprint $table) {
            $table->integer('id_PJ')->unique()->autoIncrement();
            $table->string('nama_PJ');
            $table->double('no_HP', 13);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pj_perbaikan');
    }
};
