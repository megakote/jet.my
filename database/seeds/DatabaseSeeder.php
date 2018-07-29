<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuSeeder::class);
        $this->call(UserSeeder::class);


        factory(App\News::class, 50)->create();
        factory(App\MainPageReviews::class, 5)->create();
        factory(App\Photo::class, 200)->create();
        factory(App\PhotoAlbum::class, 10)->create();
    }
}
