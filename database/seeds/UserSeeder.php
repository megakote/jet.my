<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'slowdream',
            'email' => 'slowdream@yandex.ru',
            'surname' => 'slowdreams',
            'patronymic' => 'slowdreamsss',
            'tel' => '9996241313',
            'skype' => 'sdasdas',
            'password' => 'adminadmin',
            'role_id' => 4,
            'sex_id' => 2
        ]);

    }
}
