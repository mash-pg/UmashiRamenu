<?php

namespace Database\Factories;

use App\Models\Pay;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class PayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pay::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //categoriesとshopsのidをランダムに取得する
        $shop_id = Shop::all()->random(10)[0]->id;
        $pay_id = Pay::all()->random(2)[0]->id;

        return [
            'shop_id' => $shop_id,
            '$pay_id' => $pay_id
        ];
    }
}
