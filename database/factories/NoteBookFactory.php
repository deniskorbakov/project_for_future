<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NoteBook>
 */
class NoteBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'company' => fake()->company(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'date_of_birth' => fake()->dateTime(),
            'photo' => fake()->imageUrl(),
        ];
    }
}
