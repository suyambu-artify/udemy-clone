<?php

use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
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
            'requirements' => '<li>A mac</li>',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',
        ]);

        DB::table('courses')->insert([
        	'title' => 'test',
        	'image' => 'http://placehold.it/250x250',
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'test',
        	'price' => 10.00,
            'requirements' => '<li>A mac</li>',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',
        ]);

        DB::table('courses')->insert([
        	'title' => 'test 2',
        	'image' => 'http://placehold.it/250x250',
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'test-2',
        	'price' => 10.00,
            'requirements' => '<li>A mac</li>',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',
        ]);

        DB::table('courses')->insert([
        	'title' => 'test 3',
        	'image' => 'http://placehold.it/250x250',
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'test-3',
        	'price' => 10.00,
            'requirements' => '<li>A mac</li>',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',
        ]);

        $faker = Faker\Factory::create();


        for ($i = 0; $i < 20; $i++) {
            $requirements = '';
            for($x = 0; $x < 4; $x++) {
                $requirements .= '<li>' . $faker->sentence($nbWords = 6, $variableNbWords = true) . '</li>';
            }

            DB::table('courses')->insert([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'category_id' => $faker->numberBetween($min = 1, $max = 3),
                'sub_category_id' => $faker->numberBetween($min = 1, $max = 3),
                'author_id' => $faker->numberBetween($min = 1, $max = 3),
                'slug' => $faker->slug,
                'price' => 10.00,
                'requirements' => $requirements,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',
            ]);

        }

        
    }
}
