<?php

class Answer extends Eloquent
{
    protected $table = 'answers';
    protected $fillable = array('answer', 'votes');
}
