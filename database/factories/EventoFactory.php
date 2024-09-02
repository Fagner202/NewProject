<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    protected $model = \App\Models\Evento::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->word(),
            'descricao' => $this->faker->sentence(),
            'data' => $this->faker->date(),
            'hora_inicio' => $this->faker->time(),
            'hora_fim' => $this->faker->time(),
            'localizacao' => $this->faker->address(),
            'imagem' => $this->faker->imageUrl(),
            'vagas' => $this->faker->numberBetween(0, 100),
            'ativo' => $this->faker->boolean(),
        ];
    }
}
