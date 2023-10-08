<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retur_penjualans', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->string('reff', 20);
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->unsignedBigInteger('petugas_id')->nullable();
            $table->double('harga_jual', 20, 2)->default(0);
            $table->double('qty', 20, 2)->default(0);
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
        Schema::dropIfExists('retur_penjualans');
    }
}
