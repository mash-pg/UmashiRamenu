<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Menu;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $shop_id = Shop::all()->random(10)[0]->id;
        $menu_id = Menu::all()->random(10)[0]->id;

        return [
            //
            'type' => $this->faker->title,
            'shop_id' => $shop_id,
            'menu_id'=> $menu_id,
            'price' => rand(1000,1500)."円"."〜".rand(1501,2000)."円",
            'menu' => "ラーメン"."_".Str::random(1),
            'img' => $shop_id."/".Str::random(5).".jpg"
        ];
    }
}
