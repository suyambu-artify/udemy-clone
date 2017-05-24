<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
        	'title' => 'Master Electron: Desktop Apps using HTML, JavaScript & CSS',
        	'image' => 'http://placehold.it/250x250',
        	'category' => 'development',
        	'sub_category' => 'web-development',
        	'price' => 10.00
        ]);

        DB::table('courses')->insert([
        	'title' => 'test',
        	'image' => 'http://placehold.it/250x250',
        	'category' => 'development',
        	'sub_category' => 'web-development',
        	'price' => 10.00
        ]);

        DB::table('courses')->insert([
        	'title' => 'test 2',
        	'image' => 'http://placehold.it/250x250',
        	'category' => 'development',
        	'sub_category' => 'web-development',
        	'price' => 10.00
        ]);

        DB::table('courses')->insert([
        	'title' => 'test 3',
        	'image' => 'http://placehold.it/250x250',
        	'category' => 'development',
        	'sub_category' => 'web-development',
        	'price' => 10.00
        ]);
    }
}
