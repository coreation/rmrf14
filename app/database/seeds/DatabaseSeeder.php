<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // $this->call('UserTableSeeder');
        $this->seedBase();
    }

    public function seedBase()
    {
        $question = \Question::create(
            [
                'title' => 'Statue broke',
                'question' => 'The statue on main street broke! Fix this please, it is my favorite statue of ALL the statues.',
                'votes' => 0,
                'latitude' => 0,
                'longitude' => 0
            ]
        );

        \Answer::create(
            [
                'answer' => "I'll get some glue and fix that naked man statue right up!",
                'question_id' => $question->id,
                'votes' => 0,
            ]
        );
    }
}
