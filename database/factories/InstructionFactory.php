<?php

namespace Database\Factories;

use App\Models\Instruction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class InstructionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instruction::class;

    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    
    {
        $faker = Faker::create();
        return [
            'step_number' => strval($this->faker->numberBetween($min = 5, $max=100)),
            'description' => $this->faker->text($maxNbChars = 250),
            'created_at' => $this->faker->dateTimeBetween('-20 days', '-10 days'),
            'updated_at' => $this->faker->dateTimeBetween('-10 days', now())

        ];
    }
}
