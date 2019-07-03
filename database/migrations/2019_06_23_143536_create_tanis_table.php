<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('jenis_organisasi', ['Kelompok Tani', 'Kelompok Wanita Tani']);
            $table->string('nama');
            $table->string('ketua');
            $table->string('address');
            $table->string('nomor_hp');
            $table->integer('jumlah_anggota');
            $table->text('kegiatan_rutin');
            $table->string('logo');
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
        Schema::dropIfExists('tanis');
    }
}
