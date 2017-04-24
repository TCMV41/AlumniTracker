<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('approved');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('country');
            $table->date('yearGraduated');
            $table->string('degree');
            $table->string('degreeClass');
            $table->string('occupation');
            $table->string('countryEmployed');
            $table->string('company');
            $table->string('companyEmail')->unique();
            $table->string('interests');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
