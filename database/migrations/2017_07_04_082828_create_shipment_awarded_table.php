<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentAwardedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('shipment_awarded', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('shipment_id');
             $table->integer('awarded_to');
             $table->string('transaction_id');
             $table->tinyInteger('payment_status');
             $table->dateTime('created_date');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shipment_awarded');
    }
}
