<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('resorts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('country_name')->nullable();
            $table->integer('resort_id');
            $table->integer('country_id');
            $table->string('is_popular');
            $table->string('at_filtering');
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::dropIfExists('resorts');*/
    }
}
