<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHutangSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hutang_suppliers', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->string('nota', 20)->nullable();
            $table->string('reff', 20)->nullable();
            $table->double('debet', 20, 2)->default(0);
            $table->double('kredit', 20, 2)->default(0);
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->unsignedBigInteger('kasir_id')->nullable();
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
        Schema::dropIfExists('hutang_suppliers');
    }
}
