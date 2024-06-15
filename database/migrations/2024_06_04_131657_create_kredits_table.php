<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
<<<<<<< HEAD
    public function up()
=======
    public function up(): void
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
    {
        Schema::create('tbl_kredits', function (Blueprint $table) {
            $table->id('id_kredit');
            $table->integer('id_user');
            $table->string('nama_kredit');
            $table->date('awal_kredit');
<<<<<<< HEAD
            $table->integer('tenor');
            $table->date('akhir_kredit');
            $table->decimal('jumlah', 15, 2); // Use decimal for currency values
=======
            $table->date('akhir_kredit');
            $table->bigInteger('jumlah');
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
            $table->string('status');
            $table->timestamps();
        });
    }

<<<<<<< HEAD

=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_kredits');
    }
};
