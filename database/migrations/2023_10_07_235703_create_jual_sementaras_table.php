<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJualSementarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jual_sementaras', function (Blueprint $table) {
            $table->id();
            $table->string('reff', 20)->nullable();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('satuan', 10)->nullable();
            $table->double('harga_jual', 20, 2)->default(0);
            $table->integer('qty');
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
        Schema::dropIfExists('jual_sementaras');
    }
}
