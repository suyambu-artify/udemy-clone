<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
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
        	'password' => bcrypt('password'),
            'bio' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid error quisquam dolor perspiciatis, tempore, est praesentium at voluptatem aspernatur ipsum veritatis deleniti, rerum placeat quam ut quibusdam. Iusto eligendi, praesentium!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><p> Temporibus laborum ea adipisci quaerat excepturi repellendus dolorum id, sint, iste at, ipsam nulla in sed libero autem dolore? Atque quas, incidunt.</p>',
            'exerpt' => '<p>He is one cool cat</p>',
        ]);

        DB::table('users')->insert([
            'name' => 'John Smith',
            'email' => 'yolo@admin.com',
            'password' => bcrypt('123456'),
            'bio' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid error quisquam dolor perspiciatis, tempore, est praesentium at voluptatem aspernatur ipsum veritatis deleniti, rerum placeat quam ut quibusdam. Iusto eligendi, praesentium!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><p> Temporibus laborum ea adipisci quaerat excepturi repellendus dolorum id, sint, iste at, ipsam nulla in sed libero autem dolore? Atque quas, incidunt.</p>',
            'exerpt' => '<p>He is one cool cat</p>',
        ]);

        DB::table('users')->insert([
            'name' => 'Mallory Smith',
            'email' => 'macCat@admin.com',
            'password' => bcrypt('cats'),
            'bio' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid error quisquam dolor perspiciatis, tempore, est praesentium at voluptatem aspernatur ipsum veritatis deleniti, rerum placeat quam ut quibusdam. Iusto eligendi, praesentium!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><p> Temporibus laborum ea adipisci quaerat excepturi repellendus dolorum id, sint, iste at, ipsam nulla in sed libero autem dolore? Atque quas, incidunt.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate beatae dicta non vel aut, nesciunt minus nobis fugit? Necessitatibus alias asperiores inventore eveniet veniam quam perferendis dicta. Porro, maxime, nihil.</p>',
            'exerpt' => '<p>She is one cool cat</p><p>Plays hockey on the reg. Shoots hoops at the park. Owns a turtle</p>',
        ]);
    }
}

