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
        return [
        ];
    }
}
