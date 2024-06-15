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
<<<<<<< HEAD
        //
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
        Schema::create('tbl_karyawans', function (Blueprint $table) {
            $table->id('id_karyawan');
            $table->integer('id_user');
            $table->string('nama');
<<<<<<< HEAD
            $table->string('npwp')->nullable();
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
            $table->string('posisi');
            $table->bigInteger('gaji');
            $table->integer('umur');
            $table->string('alamat');
            $table->string('kontak');
<<<<<<< HEAD
            $table->enum('bpjs', ['memiliki', 'tidak-memiliki']);
            $table->date('tgl_gajian');
=======
            $table->date('tgl_gajian');
            $table->string('npwp'); 
            $table->boolean('bpjs');
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        //
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
        Schema::dropIfExists('tbl_karyawans');
    }
};
