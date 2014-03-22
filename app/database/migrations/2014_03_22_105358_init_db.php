<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitDb extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create feedback database
        Schema::create('questions', function($table){
            $table->increments('id');
            $table->text('question');
            $table->integer('votes');
            $table->string('title', 255);
            $table->double('latitude', 15, 8);
            $table->double('longitude', 15, 8);
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
        // Drop feedback database
        Schema::drop('questions');
    }
}
