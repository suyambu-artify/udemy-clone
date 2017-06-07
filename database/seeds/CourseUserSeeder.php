<?php

use Illuminate\Database\Seeder;

class CourseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_user')->insert([
        	'user_id' => 1,
        	'course_id' => 2,
        	'lessons_completed' => 1,
        ]);

        DB::table('course_user')->insert([
        	'user_id' => 1,
        	'course_id' => 1,
        	'lessons_completed' => 2,
        ]);

        DB::table('course_user')->insert([
        	'user_id' => 2,
        	'course_id' => 5,
        	'lessons_completed' => 2,
        ]);

        DB::table('course_user')->insert([
        	'user_id' => 1,
        	'course_id' => 2,
        	'lessons_completed' => 2,
        ]);
    }
}
