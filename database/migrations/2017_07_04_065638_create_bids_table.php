<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shipment_id');
            $table->integer('amount');
            $table->text('notes');
            $table->date('pickup_date');
            $table->time('pickup_time');
            $table->integer('pickup_range');
            $table->date('delivery_date');
            $table->time('delivery_time');
            $table->integer('delivery_range');
            $table->tinyInteger('truck_type');
            $table->integer('created_by');
            $table->tinyInteger('status');
            $table->dateTime('created_date');
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
        Schema::drop('bids');
    }
}
