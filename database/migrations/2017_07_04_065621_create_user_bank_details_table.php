<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBankDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bank_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('account_name');
            $table->string('billing_address');
            $table->string('account_number');
            $table->string('bank_name');
            $table->string('bank_address');
            $table->string('swift_code');
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
        Schema::drop('user_bank_details');
    }
}
