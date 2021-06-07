<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'recipe-title' => 'Mexican Tortillias',
            'recipe-desc-short' => 'A lovely Mexican meal which is easy to cook',
            'recipe-desc' => 'Learned this from my mom',
            'ingredients' => '2 tomatoes, 4 wraps, 200g cheese',
            'prep-time-minutes' => 30
        ]);
        DB::table('recipes')->insert([
            'recipe-title' => 'Italian Pasta',
            'recipe-desc-short' => 'A super simple recipe for real Italian pasta',
            'recipe-desc' => 'Learned this from my dad',
            'ingredients' => '500g pasta, 3 tomatoes',
            'prep-time-minutes' => 25
        ]);
    }
}
