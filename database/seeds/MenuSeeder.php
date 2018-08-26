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
        $learning = Menu::create([
            'parent_id' => $menu_top->id,
            'title' => 'Обучение',
            'url' => '/courses'
        ]);

        $courseCategories = \App\Models\CourseCategory::all();

        foreach ($courseCategories as $courseCategory) {
            Menu::create([
                'parent_id' => $learning->id,
                'title' => $courseCategory->name,
                'url' => '/courses/' . $courseCategory->slug
            ]);
        }

        Menu::create([
            'parent_id' => $menu_top->id,
            'title' => 'База резюме',
            'url' => '/personnel/'
        ]);
        Menu::create([
            'parent_id' => $menu_top->id,
            'title' => 'Фотогалерея',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $menu_top->id,
            'title' => 'Отзывы / видеоотзывы',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $menu_top->id,
            'title' => 'Контакты',
            'url' => '/contacts'
        ]);
        Menu::create([
            'parent_id' => $menu_top->id,
            'title' => 'Кадровое агентство',
            'url' => '/'
        ]);

        $footer1 = Menu::create([
            'place' => 'footer1',
            'title' => 'Нижнее1',
            'url' => ''
        ]);
        Menu::create([
            'parent_id' => $footer1->id,
            'title' => 'О компании',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $footer1->id,
            'title' => 'Новости',
            'url' => '/news'
        ]);
        Menu::create([
            'parent_id' => $footer1->id,
            'title' => 'Контакты',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $footer1->id,
            'title' => 'Фотогалерея',
            'url' => '/'
        ]);




        $footer2 = Menu::create([
            'place' => 'footer2',
            'title' => 'Нижнее2',
            'url' => ''
        ]);
        Menu::create([
            'parent_id' => $footer2->id,
            'title' => 'Программы обучения',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $footer2->id,
            'title' => 'Первоначальное обучение',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $footer2->id,
            'title' => 'Курсы повышения квалификации',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $footer2->id,
            'title' => 'Переподготовка на другие типы ВС',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $footer2->id,
            'title' => 'Бизнес-авиация',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $footer2->id,
            'title' => 'Иностранные языки',
            'url' => '/'
        ]);
        Menu::create([
            'parent_id' => $footer2->id,
            'title' => 'Дистанционное обучение',
            'url' => '/'
        ]);
    }
}
