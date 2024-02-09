<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacature>
 */
class VacatureFactory extends Factory
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

            'title' => $this->faker->sentence(1),
            'description' => $this->faker->sentence(10),
            'minimumSkills' => implode(' ', $this->faker->words(5)),
            'company_id' => Company::factory(),
            'niceToHaveSkills' => implode(' ', $this->faker->words(5)),
            'persoonlijkheid' => implode(' ', $this->faker->words(5)),
            'sollicitatieType' => $this->faker->randomElement(['Verplicht', 'optioneel', 'Niet toegestaan']),
            'categorie' => $this->faker->randomElement(['ICT', 'Techniek', 'Zorg', 'Onderwijs', 'Overig']),
            'aantalPlaatsen' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['live', 'verborgen', 'gesloten']),
            'endDate' => $this->faker->dateTimeBetween('now', '+1 year')
        ];
    }
}
