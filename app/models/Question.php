<?php

class Question extends Eloquent
{
    protected $table = 'question';
    protected $fillable = array('question', 'votes');
}
