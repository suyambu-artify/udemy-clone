<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
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
    		]);
    	}
        
    }
}
