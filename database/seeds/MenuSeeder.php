<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu_top = Menu::create([
            'place' => 'header',
            'title' => 'Верхнее',
            'url' => ''
        ]);
        Menu::create([
            'parent_id' => $menu_top->id,
            'title' => 'Главная',
            'url' => '/'
        ]);

        $footer1 = Menu::create([
            'place' => 'footer1',
            'title' => 'Нижнее1',
            'url' => ''
        ]);
        Menu::create([
            'parent_id' => $footer1->id,
            'title' => 'Отзывы',
            'url' => '/feedback'
        ]);

        $footer2 = Menu::create([
            'place' => 'footer2',
            'title' => 'Нижнее2',
            'url' => ''
        ]);
        Menu::create([
            'parent_id' => $footer2->id,
            'title' => 'Новости',
            'url' => '/news'
        ]);
    }
}
