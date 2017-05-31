<?php

use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('reviews')->insert([
            'title' => '<h2>review 1</h2>',
            'content' => '<p>The best ever</p>',
            'user_id' => 1,
            'course_id' => 1,
            'rating' => 4,
        ]);

        DB::table('reviews')->insert([
            'title' => '<h2>review 2</h2>',
            'content' => '<p>The worst ever bro</p>',
            'user_id' => 2,
            'course_id' => 1,
            'rating' => 2,
        ]);

        DB::table('reviews')->insert([
            'title' => '<h2>review 3</h2>',
            'content' => '<p>The best ever yolo swag</p>',
            'user_id' => 3,
            'course_id' => 1,
            'rating' => 4,
        ]);
    }
}
