<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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

            'company_id' => $this->faker->numberBetween(1, 10),
            'thumbnail' => $this->faker->imageUrl(),
            'projectName' => $this->faker->name(),
            'introduction' => $this->faker->text(),
            'projectDescription' => $this->faker->text(),
            'conclusion' => $this->faker->text(),
            'tags' => $this->faker->text(),
            'author' => Employee::factory(),
            'projectLink' => $this->faker->url(),
            'projectImage' => $this->faker->imageUrl(),

            

        ];
    }
}
