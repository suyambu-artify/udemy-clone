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
        	array('title' => 'Development','slug' => 'development'),
        	array('title' => 'Business', 'slug' => 'business'),
        	array('title' => 'IT & Software', 'slug' => 'it-and-software'),
        	array('title' => 'Office Productivity', 'slug' => 'office-productivity'),
        	array('title' => 'Personal Development', 'slug' => 'personal-development'),
        	array('title' => 'Design', 'slug' => 'design'),
        	array('title' => 'Lifestyle','slug' => 'lifestyle'),
        	array('title' => 'Photography','slug' => 'photography'),
        	array('title' => 'Health & Fitness','slug' => 'health-and-fitness'),
        	array('title' => 'Teacher Training','slug' => 'teacher-training'),
        	array('title' => 'Music','slug' => 'music'),
        	array('title' => 'Academics','slug' => 'academics'),
        	array('title' => 'Language','slug' => 'language'),
        	array('title' => 'Test Prep','slug' => 'test-prep'),
    	];

    	foreach($defaults as $record) {
    		DB::table('categories')->insert([
    			'title' => $record['title'],
                'slug' => $record['slug']
    		]);
    	}
        
    }
}
