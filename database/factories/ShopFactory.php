<?php

namespace Database\Factories;


use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;


class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'shop_name' => $this->faker->title,
            'access' =>  $this->faker->address,
            'kodawari' =>  $this->faker->realText(512),
            'business_day' =>  $this->faker->realText(50),
            'tel' =>  $this->faker->phoneNumber,
            'parking_area' => $this->faker->address,
            'seat' => $this->faker->realText(50)
        ];
    }
}
