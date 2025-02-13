<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Association;
use App\Models\User;

class AssociationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Association::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => fake()->word(),
            'email' => fake()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'create_date' => fake()->dateTime(),
            'description' => fake()->text(),
            'level' => fake()->randomDigitNotNull(),
            'id_responsible' => User::inRandomOrder()->first()->id,
        ];
    }
}
