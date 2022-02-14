<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ArtigoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = [1,2,3,4,5];
        
        return [
            'titulo' => $this->faker->realText(40),
            'texto' => '<p>' . $this->faker->realText(400) . '</p>',
            'data_publicacion' => $this->faker->date(),
            'user_id' => Arr::random($users)
        ];
    }
}
