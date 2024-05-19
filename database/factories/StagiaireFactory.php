<?php

namespace Database\Factories;

use App\Models\Filiere;
use App\Models\Telephone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stagiaire>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->firstName(),
            'prenom' => $this->faker->lastName(),
            'telephone_id' => Telephone::inRandomOrder()->first()->id,
            'filiere_id' => Filiere::inRandomOrder()->first()->id
        ];
    }
}
