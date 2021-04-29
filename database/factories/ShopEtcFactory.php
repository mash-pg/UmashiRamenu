<?php

namespace Database\Factories;

use App\Models\ShopEtc;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopEtcFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShopEtc::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'etc' =>  $this->faker->realText(50),
        ];
    }
}
