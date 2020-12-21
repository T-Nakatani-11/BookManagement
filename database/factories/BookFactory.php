<?php

namespace Database\Factories;

use App\Models\Book;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'   => $this->faker->word,
            'content' => $this->faker->realText
        ];
    }
}