<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Thomas Shannon',
        	'email' => 'test@admin.com',
        	'password' => bcrypt('password')
        ]);
    }
}

