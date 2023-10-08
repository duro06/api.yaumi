<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jurnal', 20)->nullable();
            $table->string('kode_trans', 20)->nullable();
            $table->unsignedBigInteger('transaksi_id')->nullable();
            $table->double('debet', 20, 2)->nullable();
            $table->double('kredit', 20, 2)->nullable();
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
        Schema::dropIfExists('details_transaksis');
    }
}
