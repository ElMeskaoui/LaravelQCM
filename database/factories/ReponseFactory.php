<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reponse>
 */
class ReponseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lib_reponse'=>$this->faker->sentence(1),
            'id_quetion'=>$this->faker->numberBetween(1,10),
            'corect'=>$this->faker->numberBetween(0,1),
        ];
    }
}
