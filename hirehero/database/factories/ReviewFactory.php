<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
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
            'student_id' => Student::factory(),
            'company_id' => Company::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'review' => $this->faker->word(),
            'created_at' => $this->faker->date(),

        ];
    }
}
