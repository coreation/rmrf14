<?php

namespace repositories\interfaces;

interface AnswerRepositoryInterface
{
    /**
     * Get answer based on an id
     *
     * @param string $id The id of a answer
     *
     * @return array
     */
    public function getById($id);

    /**
     * Get all of the top answers
     *
     * @param integer $id  The id of a answer
     *
     * @return array
     */
    public function getTopAnswer($id);

    /**
     * Store a new answer
     *
     * @param array $input An array that holds the properties to create a new answer
     *
     * @return array
     */
    public function store($input);

    /**
     * Delete a answer
     *
     * @param integer $id The id of the answer that needs deletion
     */
    public function delete($id);

    /**
     * Upvote a answer
     *
     * @param integer $id The id of the answer that needs upvoting
     *
     * @return boolean True if the answer was succesfully upvoted, false if not
     */
    public function upvote($id);
}
