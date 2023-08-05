<?php

namespace Database\Factories;
use App\Models\libro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    protected $model =libro::class;
    /**
     * Define the model's default state.
     * @return array<string, mixed>php
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->sentence(),
            'genero' => fake()->randomElement(['Historia','Infantil']),
            'autor' => fake()->name(),
            'editorial' => fake()->company()
        ];
    }
}
