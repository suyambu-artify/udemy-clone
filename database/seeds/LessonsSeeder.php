<?php

use Illuminate\Database\Seeder;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            'title' => 'lecture-1',
            'lecture_id' => 1,
        	'video_url' => 'https://www.youtube.com/watch?v=We7RUcCVjzo',
        	'time' => 23.48,
        ]);

        DB::table('lessons')->insert([
            'title' => 'lecture-2',
            'lecture_id' => 1,
            'video_url' => 'https://www.youtube.com/watch?v=We7RUcCVjzo',
            'time' => 21.48,
        ]);

        DB::table('lessons')->insert([
            'title' => 'lecture-3',
            'lecture_id' => 1,
            'video_url' => 'https://www.youtube.com/watch?v=We7RUcCVjzo',
            'time' => 26.48,
        ]);

        DB::table('lessons')->insert([
            'title' => 'lecture-4',
            'lecture_id' => 1,
            'video_url' => 'https://www.youtube.com/watch?v=We7RUcCVjzo',
            'time' => 13.48,
        ]);
    }
}
