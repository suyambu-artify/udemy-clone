<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(CourseUserSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SubcategoriesSeeder::class);
        $this->call(LecturesSeeder::class);
        $this->call(LessonsSeeder::class);
        $this->call(ReviewsSeeder::class);
    }
}
