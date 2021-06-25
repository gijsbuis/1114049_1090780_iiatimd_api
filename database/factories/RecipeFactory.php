<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    
    {
        $fakerNL = Faker\Factory::create('nl_NL');
        return [
            'title' => $fakerNL->unique()->text($maxNbChars = 7),
            'description_short' => $fakerNL->text($maxNbChars = 25),
            'description' => $fakerNL->text(),
            'prep_time_min' => strval($fakerNL->numberBetween($min = 5, $max=100)),
            'created_at' => $fakerNL->dateTimeBetween('-20 days', '-10 days'),
            'updated_at' => $fakerNL->dateTimeBetween('-10 days', now())

        ];
    }
}
