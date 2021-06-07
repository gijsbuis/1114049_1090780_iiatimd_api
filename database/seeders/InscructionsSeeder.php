<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InscructionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructions')->insert([
            'recipe-title' => 'Mexican Tortillias',
            'recipe-desc-short' => 'A lovely Mexican meal which is easy to cook',
            'recipe-desc' => 'Learned this from my mom',
            'ingredients' => '2 tomatoes, 4 wraps, 200g cheese',
            'prep-time-minutes' => 30
        ]);
    }
}
