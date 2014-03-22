<?php

class Question extends Eloquent
{
    protected $table = 'questions';
    protected $fillable = array('question', 'votes');

    public function answers()
    {
        return $this->hasMany('Answer');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
}
