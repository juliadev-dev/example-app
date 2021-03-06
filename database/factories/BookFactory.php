<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->sentence(3),
            'excerpt' => $this->faker->paragraph(1),
            'sinopsis' => $this->faker->paragraph(7),
        ];
    }
}
