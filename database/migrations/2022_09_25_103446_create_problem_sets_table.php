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
        Schema::create('problem_sets', function (Blueprint $table) {
            $table->id();
            //$table->string('category');
            $table->string('title');
            $table->longText('statement');
            $table->longText('sample_input');
            $table->longText('sample_output');
            $table->longText('notes');
            $table->longText('standerd_input');
            $table->longText('standerd_output');
            $table->string('cpu_limit');
            $table->string('mem_limit');
            $table->string('source_limit');
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
        Schema::dropIfExists('problem_sets');
    }
};
