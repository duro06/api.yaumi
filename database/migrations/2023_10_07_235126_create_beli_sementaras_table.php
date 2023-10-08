<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeliSementarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // tabel detail pembelian sementara
        Schema::create('beli_sementaras', function (Blueprint $table) {
            $table->id();
            $table->string('nota', 20)->nullable();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('satuan', 10)->nullable();
            $table->double('harga_beli', 20, 2)->default(0);
            $table->integer('qty')->default(0);
            $table->integer('gudang')->default(0); // stok gudang
            $table->integer('toko')->default(0); // stok toko
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
        Schema::dropIfExists('beli_sementaras');
    }
}
