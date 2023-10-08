<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retur_pembelians', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->string('reff');
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->unsignedBigInteger('kasir_id')->nullable();
            $table->unsignedBigInteger('stok_id')->nullable();
            $table->double('harga_beli', 20, 2)->default(0);
            $table->double('qty', 20, 2)->default(0);
            $table->double('subtotal', 20, 2)->default(0);
            // $table->string('stok', 20)->nullable();
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
        Schema::dropIfExists('retur_pembelians');
    }
}
