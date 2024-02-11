<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Student;
use App\Models\Vacature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sollicitatie>
 */
class SollicitatieFactory extends Factory
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
            'vacature_id' => Vacature::factory(),

            'status' => $this->faker->randomElement(['In review', 'shortlist', 'match', 'declined', 'hired']),
            'feedback' => $this->faker->text,
            'created_at' => now()
            
        ];
    }
}
