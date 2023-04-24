<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    const DEFAULT_IMAGE = 'https://via.placeholder.com/500x700/258DC8/E0F6FD';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->city(),
            'country_id' => Country::all()->random()?->id,
        ];
    }
}
