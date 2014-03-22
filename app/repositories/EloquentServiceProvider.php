<?php

namespace repositories;

use Illuminate\Support\ServiceProvider;

class EloquentServiceProvider extends ServiceProvider
{

    public function register()
    {
        \App::bind(
            'repositories\interfaces\QuestionRepositoryInterface',
            'repositories\QuestionRepository'
        );

        \App::bind(
            'repositories\interfaces\AnswerRepositoryInterface',
            'repositories\AnswerRepository'
        );
    }
}
