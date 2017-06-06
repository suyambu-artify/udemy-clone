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
        	'video_url' => '/videos/video-1.mp4',
        	'time' => 23.48,
            'position' => 1,
        ]);

        DB::table('lessons')->insert([
            'title' => 'lecture-2',
            'lecture_id' => 1,
            'video_url' => '/videos/video-1.mp4',
            'time' => 21.48,
            'position' => 2,
        ]);

        DB::table('lessons')->insert([
            'title' => 'lecture-3',
            'lecture_id' => 1,
            'video_url' => '/videos/video-1.mp4',
            'time' => 26.48,
            'position' => 3,
        ]);

        DB::table('lessons')->insert([
            'title' => 'lecture-4',
            'lecture_id' => 1,
            'video_url' => '/videos/video-1.mp4',
            'time' => 13.48,
            'position' => 4,
        ]);
    }
}
