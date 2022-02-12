<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtigoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->text(40),
            'texto' => '<p>' . implode('</p><p>', $this->faker->paragraphs(15)) . '</p>'
        ];
    }
}
