<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSatuanToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->enum('satuan_produksi', ['ons', 'kilogram', 'kwintal', 'ton', 'litter', 'unit', 'biji', 'pcs'])->after('kapasitas_produksi');
            $table->integer('panjang')->nullable()->default(0)->change();
            $table->integer('lebar')->nullable()->default(0)->change();
            $table->integer('tinggi')->nullable()->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('satuan_produksi');
        });
    }
}
