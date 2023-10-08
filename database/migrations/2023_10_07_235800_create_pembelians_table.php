<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->string('nota', 20)->nullable();
            $table->string('reff', 20);
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->unsignedBigInteger('petugas_id')->nullable();
            $table->unsignedBigInteger('kasir_id')->nullable();
            $table->double('subtotal', 20, 2)->default(0);
            $table->double('disc', 20, 2)->default(0);
            $table->double('ppn', 20, 2)->default(0);
            $table->double('ongkir', 20, 2)->default(0);
            $table->double('total', 20, 2)->default(0);
            $table->string('status', 10)->default('1');
            $table->double('hutang', 20, 2)->default(0);
            $table->double('bayar', 20, 2)->default(0);
            $table->double('kembali', 20, 2)->default(0);
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
        Schema::dropIfExists('pembelians');
    }
}
