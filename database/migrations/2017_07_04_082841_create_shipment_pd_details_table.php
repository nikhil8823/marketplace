<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentPdDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_pd_details', function (Blueprint $table) {
            $table->increments('id');
            $table->date('pickup_date');
            $table->time('pickup_time');
            $table->integer('pickup_range');
            $table->string('pickup_address');
            $table->string('pickup_city');
            $table->integer('pickup_country_id');
            $table->integer('pickup_postal_code');
            $table->string('pickup_name');
            $table->string('pickup_phone');
            $table->text('pickup_note');
            $table->tinyInteger('pickup_facility_type');
            $table->text('pickup_facility_details');
            $table->string('pickup_lat');
            $table->string('pickup_long');
            $table->date('delivery_date');
            $table->time('delivery_time');
            $table->integer('delivery_range');
            $table->string('delivery_address');
            $table->string('delivery_city');
            $table->integer('delivery_country_id');
            $table->integer('delivery_postal_code');
            $table->string('delivery_name');
            $table->string('delivery_phone');
            $table->text('delivery_note');
            $table->tinyInteger('delivery_facility_type');
            $table->text('delivery_facility_details');
            $table->string('delivery_lat');
            $table->string('delivery_long');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shipment_pd_details');
    }
}
