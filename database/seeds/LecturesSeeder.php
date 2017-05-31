<?php

use Illuminate\Database\Seeder;

class LecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->insert([
        	'title' => 'Lecture 1',
        	'lesson_id' => 1,
        	'course_id' => 1,
        	'order' => 1,
        ]);

        DB::table('lectures')->insert([
            'title' => 'Lecture 2',
            'lesson_id' => 2,
            'course_id' => 1,
            'order' => 2,
        ]);

        DB::table('lectures')->insert([
            'title' => 'Lecture 3',
            'lesson_id' => 3,
            'course_id' => 1,
            'order' => 3,
        ]);
    }
}
