<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('service_type');
            $table->integer('created_by');
            $table->boolean('load_type');
            $table->integer('truck_type');
            $table->string('additional_equipment');
            $table->boolean('is_quick');
            $table->integer('tender_budget');
            $table->dateTime('tender_end_datetime');
            $table->boolean('tender_type');
            $table->integer('total_pieces');
            $table->float('total_gross_weight');
            $table->float('total_volumetric_weight');
            $table->float('total_volume');
            $table->integer('cargo_value');
            $table->text('general_description');
            $table->float('distance');
            $table->string('tender_invitee_ids');
            $table->tinyInteger('status');
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
        Schema::drop('shipments');
    }
}
