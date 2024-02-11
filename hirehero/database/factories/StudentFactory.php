<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'user_id' => User::factory(),
            'school' => $this->faker->word(),
            'opleiding' => $this->faker->word(),
            'stageBegin' => $this->faker->date(),
            'stageEinde' => $this->faker->date(),
            'cv' => $this->faker->word(),
            'persoonlijkheid' => $this->faker->word(),
            'interesse' => $this->faker->word(),
            'interesse2' => $this->faker->word(),
            'desinteresse1' => $this->faker->word(),
            'desinteresse2' => $this->faker->word(),
            
        ];
    }
}
