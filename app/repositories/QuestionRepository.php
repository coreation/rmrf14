<?php

namespace repositories;

use repositories\BaseRepository;
use repositories\interfaces\QuestionRepositoryInterface;

// titel  tags body
// answers -> upvoting
// question -> upvoting
// category locatie
class QuestionRepository extends BaseRepository implements QuestionRepositoryInterface
{

    public function __construct(\Question $model)
    {
        parent::__construct();

        $this->model = $model;
    }

    /**
     * Get a question based on an id, with tags and answers
     *
     * @param string $id The id of a question
     *
     * @return array
     */
    public function getById($id)
    {
        return $this->model->find($id)->with('answers', 'tags')->get()->toArray();
    }


    /**
     * Get all of the top questions
     *
     * @param integer $limit  The limit of the amount of questions returned
     * @param integer $offset The offset from when questions are returned
     *
     * @return array
     */
    public function getTopQuestions($limit = PHP_INT_MAX, $offset = 0)
    {
        return $this->model->take($limit)->skip($offset)->with('tags', 'answers')->orderBy('votes', 'desc')->get()->toArray();
    }

    /**
     * Get a set of questions
     *
     * @param integer $limit  The limit of the amount of questions returned
     * @param integer $offset The offset from when questions are returned
     *
     * @return array
     */
    public function getQuestions($limit = PHP_INT_MAX, $offset = 0)
    {
        return $this->model->take($limit)->skip($offset)->with('tags', 'answers')->get()->toArray();
    }

    /**
     * Store a new question
     *
     * @param array $input An array that holds the properties to create a new question
     *
     * @return array
     */
    public function store($input)
    {
        return $this->model->create($input);
    }

    /**
     * Delete a question
     *
     * @param integer $id The id of the question that needs deletion
     */
    public function delete($id)
    {
        $model = $this->model->find($model_id);

        if (!empty($model)) {
            return $model->delete();
        }
    }

    /**
     * Upvote a question
     *
     * @param integer $id The id of the question that needs upvoting
     *
     * @return boolean True if the question was succesfully upvoted, false if not
     */
    public function upvote($id)
    {
        $question = $this->model->find($model_id);

        if (!empty($question)) {
            $votes = $question->votes;
            $votes++;
            $question->votes = $votes;
            return $question->save();
        }

        return false;
    }
}
