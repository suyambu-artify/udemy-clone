<?php

use Illuminate\Database\Seeder;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	$defaults = range(1,22);

    	foreach($defaults as $i) {
    		DB::table('sub_categories')->insert([
    			'title' => 'sub-' . $i,
                'slug' => 'sub-' . $i,
                'category_id' => 1
    		]);
    	}
        
    }
}
