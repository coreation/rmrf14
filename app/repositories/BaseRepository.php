<?php

namespace repositories;

class BaseRepository
{
    protected $model;

    /**
     * Get question based on an id
     *
     * @param string $id The id of a question
     *
     * @return array
     */
    public function getById($id)
    {
        $model = $this->model->find($model_id);

        if (!empty($model)) {
            return $model->toArray();
        }

        return $model;
    }
}
