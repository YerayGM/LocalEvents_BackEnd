<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Association;
use App\Models\Event;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'image' => fake()->word(),
            'description' => fake()->text(),
            'state' => fake()->randomElement(["Proximamente","Realizandose","Finalizado"]),
            'type' => fake()->randomElement(["Evento","Actividad"]),
            'num_guests' => fake()->randomNumber(),
            'max_guests' => fake()->randomNumber(),
            'start_hour' => fake()->time(),
            'end_hour' => fake()->time(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'num_collaborators' => fake()->randomNumber(),
            'max_collaborators' => fake()->randomNumber(),
            'association_id' => Association::inRandomOrder()->first()->id,
        ];
    }
}
