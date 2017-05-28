<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$defaults = [
    	'Development',
    	'Business', 
    	'IT & Software', 
    	'Office Productivity', 
    	'Personal Development', 
    	'Design', 
    	'Lifestyle',
    	'Photography',
    	'Health & Fitness',
    	'Teacher Training',
    	'Music',
    	'Academics',
    	'Language',
    	'Test Prep'
    	];

    	foreach($defaults as $title) {
    		DB::table('categories')->insert([
    			'title' => $title,
    		]);
    	}
        
    }
}
