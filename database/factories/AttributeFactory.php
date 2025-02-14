<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attribute;
use App\Models\User;

class AttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attribute::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'amable' => fake()->randomNumber(),
            'problematico' => fake()->randomNumber(),
            'puntual' => fake()->randomNumber(),
            'impuntual' => fake()->randomNumber(),
            'serio' => fake()->randomNumber(),
            'proactivo' => fake()->randomNumber(),
            'tranquilo' => fake()->randomNumber(),
            'colaborador' => fake()->randomNumber(),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
