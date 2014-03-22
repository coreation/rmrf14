<?php

class Tag extends Eloquent
{
    protected $table = 'tags';

    public function questions()
    {
        $this->belongsToMany('Question');
    }
}
