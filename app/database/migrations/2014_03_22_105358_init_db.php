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
        Schema::create('question', function($table){
            $table->increments('id');
            $table->string('question', 255);
            $table->text('votes');
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
        Schema::drop('question');
    }
}
