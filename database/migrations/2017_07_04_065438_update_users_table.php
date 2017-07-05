<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('users');
        
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('user_role');
            $table->tinyInteger('user_category');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('services');
            $table->integer('user_status');
            $table->string('avg_rating');
            $table->string('api_token');
            $table->rememberToken();
            $table->boolean('is_del')->default(0);
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
        Schema::drop('users');
    }
}
