<?php

namespace Database\Factories;

use App\Models\Access;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Access::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'post_number_1' =>  $this->faker->randomNumber(3,true),
            'post_number_2' =>  $this->faker->randomNumber(4,true),
        ];
    }
}
