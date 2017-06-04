<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $mytime = Carbon::now();

        DB::table('courses')->insert([
        	'title' => 'Master Electron: Desktop Apps using HTML, JavaScript & CSS',
        	'image' => $faker->imageUrl($width = 640, $height = 480),
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'master-electron',
            'price' => 10.00,
            'requirements' => '<li>A mac</li>',
            'excerpt' => '<p>' . $faker->sentence($nbWords = 15, $variableNbWords = true) . '</p>',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',
        ]);

        DB::table('courses')->insert([
        	'title' => 'test',
        	'image' => $faker->imageUrl($width = 640, $height = 480),
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'test',
        	'price' => 10.00,
            'requirements' => '<li>A mac</li>',
            'excerpt' => '<p>' . $faker->sentence($nbWords = 15, $variableNbWords = true) . '</p>',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',
        ]);

        DB::table('courses')->insert([
        	'title' => 'test 2',
        	'image' => $faker->imageUrl($width = 640, $height = 480),
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'test-2',
        	'price' => 10.00,
            'requirements' => '<li>A mac</li>',
            'excerpt' => '<p>' . $faker->sentence($nbWords = 15, $variableNbWords = true) . '</p>',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',
        ]);

        DB::table('courses')->insert([
        	'title' => 'test 3',
        	'image' => $faker->imageUrl($width = 640, $height = 480),
        	'category_id' => 1,
        	'sub_category_id' => 1,
            'author_id' => 1,
            'slug' => 'test-3',
        	'price' => 10.00,
            'requirements' => '<li>A mac</li>',
            'excerpt' => '<p>' . $faker->sentence($nbWords = 15, $variableNbWords = true) . '</p>',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',
        ]);


        for ($i = 0; $i < 20; $i++) {
            $requirements = '';
            $highlights = '';
            $excerpt = '<p>' . $faker->sentence($nbWords = 15, $variableNbWords = true) . '</p>';
            for($x = 0; $x < 4; $x++) {
                $requirements .= '<li>' . $faker->sentence($nbWords = 6, $variableNbWords = true) . '</li>';
                $highlights .= '<li>' . $faker->sentence($nbWords = 6, $variableNbWords = true) . '</li>';
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
                'highlights' => $highlights, 
                'excerpt' => $excerpt,
                'created_at' => $mytime->toDateTimeString(),
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores, fuga neque, id aliquid eligendi omnis sunt aliquam, quibusdam culpa corporis ipsum assumenda enim architecto eos cumque veritatis fugit vel.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus deserunt minima sunt laboriosam illum architecto assumenda magnam, porro, inventore fuga at sapiente enim vero repellat praesentium doloribus maxime et.</p>',

            ]);

        }

        
    }
}
