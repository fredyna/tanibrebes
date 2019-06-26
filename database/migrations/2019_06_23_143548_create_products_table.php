<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tani_id')->unsigned();
            $table->string('nama');
            $table->integer('kapasitas_produksi');
            $table->integer('harga_agen');
            $table->integer('harga_jual');
            $table->integer('panjang')->default(0);
            $table->integer('lebar')->default(0);
            $table->integer('tinggi')->default(0);
            $table->string('foto');
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
        Schema::dropIfExists('products');
    }
}
