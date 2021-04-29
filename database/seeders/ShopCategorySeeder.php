<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Shop;
use App\Models\ShopCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class ShopCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //配列の中身をランダムに取得
        $shop_id = Shop::all();
        $category_id = Category::all();
        $shop_id_rnd = array();
        $category_id_rnd = array();
        for($i = 0; $i<7;$i++){
            array_push($category_id_rnd,$category_id[$i]["id"]);
        }
        for($i = 0; $i<2;$i++){
            array_push($shop_id_rnd,$shop_id[$i]["id"]);
        }

        for($j=0;$j<10;$j++){
            $key=shuffle($shop_id_rnd);
            $key1=shuffle($category_id_rnd);
            ShopCategory::factory()->create([
                'shop_id' => $shop_id_rnd[$key],
                'category_id' => $category_id_rnd[$key1]
            ]);
        }
    }
}
