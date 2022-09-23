<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            // $table->id('UserID')->autoIncrement();
            // $table->string('Name');
            // $table->string('Surname');
            // $table->string('Username')->unique();
            // $table->string('User_type');
            // $table->string('Email')->unique();
            // $table->mediumText('Address');
            // $table->string('Password');
            // $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
