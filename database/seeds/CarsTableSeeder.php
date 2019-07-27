<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Carss::class, 50)->create()->each(function ($cars)
        {
        //$user->posts()->save(factory(App\Post::class)->make());
        });
    }
}
