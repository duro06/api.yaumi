<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->string('reff', 20);
            $table->string('customer', 20)->nullable();
            $table->double('subtotal', 20, 2)->default(0);
            $table->double('ongkir', 20, 2)->default(0);
            $table->double('total', 20, 2)->default(0);
            $table->double('pembayaran', 20, 2)->default(0);
            $table->double('kembali', 20, 2)->default(0);
            $table->unsignedBigInteger('petugas_id')->nullable();
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
        Schema::dropIfExists('penjualans');
    }
}
