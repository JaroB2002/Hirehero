<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'bedrijfnaam' => $this->faker->company(),
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'employees' => $this->faker->randomElement(['0 < 20', '20 < 50', '50 < 100', '100 <']),
            



            //
        ];
    }
}
