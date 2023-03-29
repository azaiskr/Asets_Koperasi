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
        Schema::create('pj_perbaikans', function (Blueprint $table) {
            $table->autoincrement('id_pj')->unique();
            $table->string('nama_pj');
            $table->string('no_Hp',13);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pj_perbaikans');
    }
};
