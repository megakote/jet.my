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

        $this->call(UserSeeder::class);


        factory(App\User::class, 50)->create();
        factory(App\Models\News::class, 50)->create();
        factory(App\Models\MainPageReviews::class, 5)->create();
        factory(App\Models\UserPhoto::class, 200)->create();
        factory(App\Models\PhotoAlbum::class, 30)->create();
        factory(App\Models\MainPageSlider::class, 7)->create();
        factory(App\Models\Course::class, 30)->create();
        factory(App\Models\CourseCategory::class, 3)->create();
        factory(App\Models\Review::class, 150)->create();

        $this->call(MenuSeeder::class);
        $this->call(AccessSeeder::class);
    }
}
