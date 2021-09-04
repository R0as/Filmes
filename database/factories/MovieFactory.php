<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
//sempre ser o msm nome do arquivo
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;
//mesmo nome do model importado
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),//faker é para gerar um dado aleatorio
            'genre' => $this->faker->name(),
            'release' => $this->faker->dateTimeThisYear(),
            'country' => $this->faker->name(),
            'synopsis' => $this->faker->text(),
            'rating' => "9.8",
            'image' => '',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
