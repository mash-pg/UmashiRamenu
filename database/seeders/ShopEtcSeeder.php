<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\ShopEtc;
use Illuminate\Database\Seeder;

class ShopEtcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $shop_id = Shop::all();
        $shop_id_ary = array();

        for($i = 0; $i<2;$i++){
            array_push($shop_id_ary,$shop_id[$i]["id"]);
        }
        for($i =0;$i<2;$i++){
            ShopEtc::factory()->create([
                'shop_id' => $shop_id_ary[$i]
            ]);

        }
    }
}
