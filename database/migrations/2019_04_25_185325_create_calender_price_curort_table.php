<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalenderPriceCurortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calender_price_curorts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resort');
            $table->integer('minprice');
            $table->integer('nightfrom');
            $table->integer('nightto');
            $table->string('checkindate');
            $table->string('checkinmonth');
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
        Schema::dropIfExists('calender_price_curorts');
    }
}
