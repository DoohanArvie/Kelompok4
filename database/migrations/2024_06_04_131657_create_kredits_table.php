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
        Schema::create('tbl_kredits', function (Blueprint $table) {
            $table->id('id_kredit');
            $table->integer('id_user');
            $table->string('nama_kredit');
            $table->date('awal_kredit');
            $table->date('akhir_kredit');
            $table->bigInteger('jumlah');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_kredits');
    }
};
