<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageupdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packageupdates', function (Blueprint $table) {
          $table->increments('id');
          $table->string('product_id');
          $table->string('title');
          $table->string('body');
          $table->longText('fafa');
            $table->timestamp('time');
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
        Schema::dropIfExists('packageupdates');
    }
}
