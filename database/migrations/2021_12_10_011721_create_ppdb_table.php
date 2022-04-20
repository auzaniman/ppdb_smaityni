<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('pilihan_tinggal');
            $table->string('pilihan_jurusan');
            $table->string('pilihan_program');
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->string('nisn');
            $table->string('nik');
            $table->string('kartu_keluarga');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('ukuran_baju'); //S,M,L,XL
            $table->string('hp_siswa');
            $table->string('hp_ortu');
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppdb');
    }
}
