<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\ShopCategory;
use App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\Factory;


class ShopCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShopCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //categoriesとshopsのidをランダムに取得する
        $shop_id = Shop::all()->random(10)[0]->id;
        $category_id = Category::all()->random(7)[0]->id;

        return [
            'shop_id' => $shop_id,
            'category_id' => $category_id
        ];
    }
}
