<?php

use repositories\interfaces\QuestionRepositoryInterface;

class TestController extends Controller
{

    protected $question;

    public function __construct(QuestionRepositoryInterface $question)
    {
        $this->question = $question;
    }

    public function testDb()
    {
        dd($this->question->getTopQuestions());
    }
}
