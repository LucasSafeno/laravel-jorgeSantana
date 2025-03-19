<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SiteContato;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    protected $model = SiteContato::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'telefone' => fake()->phoneNumber(),
            'email' => fake()->unique()->email(),
            'motivo_contatos_id' => fake()->numberBetween(1, 3),
            'mensagem' => fake()->text(200)

        ];
    }
}
