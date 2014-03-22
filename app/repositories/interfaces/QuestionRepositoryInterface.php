<?php

namespace repositories\interfaces;

interface QuestionRepositoryInterface
{
    /**
     * Get a question based on an id, with tags and answers
     *
     * @param string $id The id of a question
     *
     * @return array
     */
    public function getById($id);

    /**
     * Get all of the top questions
     *
     * @param integer $limit  The limit of the amount of questions returned
     * @param integer $offset The offset from when questions are returned
     *
     * @return array
     */
    public function getTopQuestions($limit, $offset);

    /**
     * Store a new question
     *
     * @param array $input An array that holds the properties to create a new question
     *
     * @return array
     */
    public function store($input);

    /**
     * Delete a question
     *
     * @param integer $id The id of the question that needs deletion
     */
    public function delete($id);

    /**
     * Upvote a question
     *
     * @param integer $id The id of the question that needs upvoting
     *
     * @return boolean True if the question was succesfully upvoted, false if not
     */
    public function upvote($id);
}
