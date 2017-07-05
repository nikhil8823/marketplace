<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('business_reg_no');
            $table->string('website_url');
            $table->string('office_phone');
            $table->string('office_fax');
            $table->string('contact_person');
            $table->string('phone');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('postal_code');
            $table->string('address');
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
        Schema::drop('user_details');
    }
}
