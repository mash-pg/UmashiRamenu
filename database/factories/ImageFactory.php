<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //
        $shop_id = Shop::all()->random(10)[0]->id;
        $image_id = Image::all()->random(10)[0]->id;

        return [
            //
            'type' => $this->faker->title,
            'shop_id' => $shop_id,
            'image_id'=> $image_id,
            'path' => $image_id."/dumy".rand(1,10)."png"
        ];
    }
}
