<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banking', function (Blueprint $table) {
            $table->id();
            $table->string('acc_id')->unique();
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('branch_code');
            $table->string('account_type');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banking');
    }
};
