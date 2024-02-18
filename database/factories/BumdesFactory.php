<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bumdes>
 */
class BumdesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'director' => $this->faker->name,
            'description' => $this->faker->sentence(10),
            'certification_status' => $this->faker->boolean,
            'total_employee' => $this->faker->numberBetween(1, 100),
            'unit' => $this->faker->randomElement(['A', 'B', 'C']),
            'certificate_file' => $this->faker->imageUrl(),
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
