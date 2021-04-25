<?php

namespace Database\Seeders;

use App\Models\MenuType;
use App\Models\Menu;
use App\Models\Shop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Menu::factory()->count(7)->create();
        //配列の中身をランダムに取得
        $shop_id = Shop::all();
        $menu_id = MenuType::all();
        $shop_id_rnd = array();
        $menu_id_rnd = array();

        for($i = 0; $i<3;$i++){
            array_push($menu_id_rnd,$menu_id[$i]["id"]);
        }
        for($i = 0; $i<2;$i++){
            array_push($shop_id_rnd,$shop_id[$i]["id"]);
        }

        for($j=0;$j<5;$j++){
            $key=array_rand($shop_id_rnd);
            $key1=array_rand($menu_id_rnd);
           $price = array(
                '1200円',
                '350円',
                '1000円',
                '250円',
                '1200円',
            );
            $menu = array(
                'ラーメンA',
                'チャーシュー',
                'ラーメンB',
                'ビール',
                'ラーメン',
            );
            $img = array(
                $shop_id_rnd[$key]."/testA.jpg",
                $shop_id_rnd[$key]."/testA.jpg",
                $shop_id_rnd[$key]."/testB.jpg",
                $shop_id_rnd[$key]."/testB.jpg",
                $shop_id_rnd[$key]."/testC.jpg",
            );
           Menu::factory()->create([
                'shop_id' => $shop_id_rnd[$key],
                'type_id' => $menu_id_rnd[$key1],
                'price' => $price[$j],
                'menu' => $menu[$j],
                'img' => $img[$j],
            ]);
        }
    }
}
