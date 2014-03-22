<?php

namespace repositories;

use repositories\BaseRepository;

// titel  tags body
// answers -> upvoting
// question -> upvoting
// category locatie
class QuestionRepository extends BaseRepository implements repositories\interfaces\QuestionRepositoryInterface
{
    public function __construct(\Question $model)
    {
        parent::__construct();

        $this->model = $model;
    }

    /**
     * Get all of the top questions
     *
     * @param integer $limit  The limit of the amount of questions returned
     * @param integer $offset The offset from when questions are returned
     *
     * @return array
     */
    public function getTopQuestions($limit, $offset)
    {
        return "top questions!";
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
