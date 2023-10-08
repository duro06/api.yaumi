<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu', 100)->nullable();
            $table->string('url', 100)->nullable();
            $table->string('icon', 50)->nullable();
            $table->tinyInteger('is_main')->nullable();
            $table->tinyInteger('id_main')->nullable();
            $table->tinyInteger('urut')->nullable();
            $table->timestamps();
            // $table->comment('appmenu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_menus');
    }
}
