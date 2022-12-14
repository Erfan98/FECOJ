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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('handle')->unique();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('company')->nullable();
            $table->string('institution')->nullable();
            $table->string('grad_year')->nullable();
            $table->string('location')->nullable();
            $table->string('last_seen')->nullable();
            $table->integer('default_lang')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
};
