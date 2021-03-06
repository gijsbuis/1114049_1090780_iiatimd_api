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
        DB::table('recipes')->insert([
            'title'             => 'Risotto alla Milanese',
            'description_short' => 'De klassieke risotto uit Milaan',
            'description'       => "Dit traditionele recept voor Risotto alla Milanese is een van de bekendste rijstgerechten uit de Italiaanse keuken. Risotto alla Milanese is een van de weinige risotto's die als bijgerecht wordt gebruikt.",
            'prep_time_min'     => '300',
            'created_at'        => '2021-06-06 15:34:43',
            'updated_at'        => '2021-06-20 08:45:15'
        ]);
        DB::table('recipes')->insert([
            'title'             => 'Gele linzencurry',
            'description_short' => 'Makkelijke en vullende linzencurry',
            'description'       => "Met deze curry zet je erg makkelijk een vullend gerecht op tafel. Met dit recept valt er ontzettend veel te vari??ren en je hoeft je niet perse aan de ingredi??nten te houden",
            'prep_time_min'     => '35',
            'created_at'        => '2021-06-06 15:34:43',
            'updated_at'        => '2021-06-20 08:45:15'
        ]);
        DB::table('recipes')->insert([
            'title'             => 'Mexicaanse wraps',
            'description_short' => 'Lekkere en snelle wraps op tafel',
            'description'       => "Deze Mexicaanse wraps zijn voor elke student een goede maaltijd. Het fijne van dit recept is dat iedereen kan kiezen wat hij of zij op de wrap wil en zo wordt voor iedereen elke wrap een persoonlijke lekkernij.",
            'prep_time_min'     => '25',
            'created_at'        => '2021-06-06 15:34:43',
            'updated_at'        => '2021-06-20 08:45:15'
        ]);
        DB::table('recipes')->insert([
            'title'             => 'Gazpacho met watermeloen, tomaat en limoen',
            'description_short' => 'Gazpacho van watermeloen, tomaat en limoen.',
            'description'       => "Heerlijk verfrissend in de zomer deze gazpacho. Heel snel om klaar te maken en makkelijk te bewaren voor die warme zomerse momenten.",
            'prep_time_min'     => '5',
            'created_at'        => '2021-06-06 15:34:43',
            'updated_at'        => '2021-06-20 08:45:15'
        ]);
        
        

        // $recipe = Recipe::factory()
        //             ->count(50)
        //             ->has(Ingredient::factory()->count(5), 'ingredients')
        //             ->has(Instruction::factory()->count(10), 'instructions')
        //             ->create();
    }
}
