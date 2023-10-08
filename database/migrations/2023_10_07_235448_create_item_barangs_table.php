<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('barcode', 20)->nullable();
            $table->string('nama', 50)->nullable();
            $table->string('satuan', 20)->nullable();
            $table->double('harga_beli', 20, 2)->default(0);
            $table->double('harga_jual_cust', 20, 2)->default(0);
            $table->double('harga_jual_umum', 20, 2)->default(0);
            $table->integer('stok_awal_toko')->default(0); // stok awal toko
            $table->integer('stok_awal_gudang')->default(0); // stok awal gudang
            $table->integer('rak')->default(0); // nomor rak
            $table->integer('limit_stok')->default(0);
            $table->unsignedBigInteger('user_id')->nullable(); // user_id
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
        Schema::dropIfExists('item_barangs');
    }
}
