<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitAnswer extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the answer table
        Schema::create('answers', function($table){
            $table->increments('id');
            $table->text('answer');
            $table->integer('question_id');
            $table->integer('votes');
            $table->timestamps();
        });

        Schema::create('tags', function($table){
            $table->increments('id');
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('answer_tag', function($table){
            $table->increments('id');
            $table->integer('answer_id');
            $table->integer('tag_id');
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
        // Drop the answer table
        Schema::drop('answers');
        Schema::drop('tags');
        Schema::drop('answer_tag');
    }
}
