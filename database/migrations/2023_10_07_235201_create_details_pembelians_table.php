<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('reff', 20)->nullable();
            $table->string('nota', 20)->nullable();
            $table->unsignedBigInteger('pembelian_id')->nullable();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->string('nama_barang', 100)->nullable();
            $table->double('qty', 20, 2)->default(0);
            $table->double('harga_beli', 20, 2)->default(0);
            $table->double('subtotal', 20, 2)->default(0);
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
        Schema::dropIfExists('details_pembelians');
    }
}
