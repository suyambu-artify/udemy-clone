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
        	'lessons_completed' => 12,
        	'lessons_total' => 45,
        ]);

        DB::table('course_user')->insert([
        	'user_id' => 1,
        	'course_id' => 1,
        	'lessons_completed' => 10,
        	'lessons_total' => 15,
        ]);

        DB::table('course_user')->insert([
        	'user_id' => 2,
        	'course_id' => 5,
        	'lessons_completed' => 17,
        	'lessons_total' => 55,
        ]);

        DB::table('course_user')->insert([
        	'user_id' => 1,
        	'course_id' => 2,
        	'lessons_completed' => 15,
        	'lessons_total' => 25,
        ]);
    }
}
