<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarHutangSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_hutang_suppliers', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->string('reff', 20);
            $table->unsignedBigInteger('supplier_id');
            $table->double('total', 20, 2)->default(null);
            $table->string('keterangan');
            $table->unsignedBigInteger('petugas_id')->default(null);
            $table->unsignedBigInteger('kasir_id')->default(null);
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
        Schema::dropIfExists('bayar_hutang_suppliers');
    }
}
