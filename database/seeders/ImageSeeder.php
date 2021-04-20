<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\ImageType;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop_id = Shop::all();
        $menu_id = ImageType::all();
        $shop_id_rnd = array();
        $menu_id_rnd = array();

        for($i = 0; $i<2;$i++){
            array_push($menu_id_rnd,$menu_id[$i]["id"]);
        }
        for($i = 0; $i<2;$i++){
            array_push($shop_id_rnd,$shop_id[$i]["id"]);
        }

        for($j=0;$j<6;$j++){
            $key=array_rand($shop_id_rnd);
            $key1=array_rand($menu_id_rnd);

            $img = array(
                $shop_id_rnd[$key]."/testA.jpg",
                $shop_id_rnd[$key]."/testB.jpg",
                $shop_id_rnd[$key]."/testB.jpg",
                $shop_id_rnd[$key]."/testC.jpg",
                $shop_id_rnd[$key]."/testC.jpg",
                $shop_id_rnd[$key]."/testE.jpg",
            );

            Image::factory()->create([
                'shop_id' => $shop_id_rnd[$key],
                'type_id' => $menu_id_rnd[$key1],
                'img' => $img[$j],
            ]);
        }
    }
}
