<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokGudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_gudangs', function (Blueprint $table) {
            $table->id();
            $table->string('reff', 20);
            $table->dateTime('tanggal');
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->double('keluar', 20, 2)->default(0);
            $table->double('masuk', 20, 2)->default(0);
            $table->double('harga', 20, 2)->default(0);
            $table->string('keterangan', 50)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable(); // user id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_gudangs');
    }
}
