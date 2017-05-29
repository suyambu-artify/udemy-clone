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
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'master-electron',
        	'price' => 10.00,
        ]);

        DB::table('courses')->insert([
        	'title' => 'test',
        	'image' => 'http://placehold.it/250x250',
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'test',
        	'price' => 10.00,
        ]);

        DB::table('courses')->insert([
        	'title' => 'test 2',
        	'image' => 'http://placehold.it/250x250',
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'test-2',
        	'price' => 10.00,
        ]);

        DB::table('courses')->insert([
        	'title' => 'test 3',
        	'image' => 'http://placehold.it/250x250',
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'test-3',
        	'price' => 10.00,
        ]);
    }
}
