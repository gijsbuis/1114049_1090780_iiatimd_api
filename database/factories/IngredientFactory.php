<?php

namespace Database\Factories;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class IngredientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ingredient::class;

    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    
    {
        $faker = Faker::create();
        return [
            'name' => $this->faker->unique()->text($maxNbChars = 7),
            'amount' => $this->faker->regexify('/^[0-9]{1,4} (g|kg|ml|l)'),
            'created_at' => $this->faker->dateTimeBetween('-20 days', '-10 days'),
            'updated_at' => $this->faker->dateTimeBetween('-10 days', now())

        ];
    }
}
