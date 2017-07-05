<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cargo_details', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('shipment_id');
             $table->tinyInteger('packaging');
             $table->integer('pieces');
             $table->integer('length');
             $table->integer('breadth');
             $table->integer('height');
             $table->float('vol_weight');
             $table->float('gross_weight');
             $table->tinyInteger('item_desc');
             $table->dateTime('updated_date');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cargo_details');
    }
}
