<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $dogNames = ['Rex', 'Thor', 'Luna', 'Bella', 'Max', 'Bob', 'Mel', 'Simba', 'Toby', 'Duke'];


        return [
            'raca' => fake()->randomElement($dogNames),
            'cor' => fake()->colorName(),
            'tamanho' => fake()->numberBetween(1, 100),
            // Para criar os id estrangeiros com base em users, se nao houver ele cria um novo
            'user_id' => User::inRandomOrder()->first()?->id ??  User::factory(),
        ];
    }
}
