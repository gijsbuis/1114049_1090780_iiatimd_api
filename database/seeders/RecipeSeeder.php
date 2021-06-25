<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Instruction;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'title'             => 'Lekkere burgers',
            'description_short' => 'Eenvoudige burgers binnen een halfuur op tafel!',
            'description'       => 'Eenvoudig te maken burgers die je zonder gedoe klaar hebt. Je kunt ze serveren met ontzettend veel bijgerechten, zoals salades of frietjes.',
            'prep_time_min'     => '30',
            'created_at'        => '2021-06-09 08:39:36',
            'updated_at'        => '2021-06-20 16:22:15'

        ]);
        DB::table('recipes')->insert([
            'title'             => 'Pasta bolognese',
            'description_short' => 'Simpele maar toch lekkere rode pasta',
            'description'       => 'Een eenvoudige rode pasta die in een handomdraai op tafel staat. Boordevol groenten en eenvoudig vegetarisch te maken.',
            'prep_time_min'     => '40',
            'created_at'        => '2021-06-05 03:34:43',
            'updated_at'        => '2021-06-18 12:45:15'
        ]);
        $recipe = Recipe::factory()
                    ->count(50)
                    ->has(Ingredient::factory()->count(5), 'ingredients')
                    ->has(Instruction::factory()->count(10), 'instructions')
                    ->create();
    }
}
