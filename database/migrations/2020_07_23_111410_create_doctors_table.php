<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('phone_number')->unique();
            $table->char('gender',1)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('place_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('exercice_place')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('profile_picture')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
