<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ?string $password;
    public function definition(): array
    {
        return [
            //

            'user_id' => User::factory(),
            'company_id' => Company::factory(),
            'functie'=> fake()->randomElement(['developer', 'designer', 'manager', 'sales']),
            'created_at' => now(),
            'updated_at' => now(),

        
        ];
    }
}
