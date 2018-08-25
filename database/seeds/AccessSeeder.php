<?php

use Illuminate\Database\Seeder;
use App\Models\Access;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Access::create([
            'name' => '1 День',
            'days' => 1,
            'price' => 100
        ]);

        Access::create([
            'name' => '1 неделя',
            'days' => 7,
            'price' => 500
        ]);

        Access::create([
            'name' => 'Год',
            'days' => 365,
            'price' => 1500
        ]);

    }
}
