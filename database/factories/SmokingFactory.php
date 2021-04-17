<?php

namespace Database\Factories;

use App\Models\Smoking;
use Illuminate\Database\Eloquent\Factories\Factory;

class SmokingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Smoking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->title
        ];
    }
}
