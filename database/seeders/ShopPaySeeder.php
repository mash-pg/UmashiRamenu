<?php

namespace Database\Seeders;

use App\Models\Pay;
use App\Models\Shop;
use App\Models\ShopPay;
use Illuminate\Database\Seeder;

class ShopPaySeeder extends Seeder
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
        $pay_id = Pay::all();
        $shop_id_rnd = array();
        $pay_id_rnd = array();
        for($i = 0; $i<2;$i++){
            array_push($pay_id_rnd,$pay_id[$i]["id"]);
        }
        for($i = 0; $i<2;$i++){
            array_push($shop_id_rnd,$shop_id[$i]["id"]);
        }

        for($j=0;$j<10;$j++){
            $key=array_rand($shop_id_rnd);
            $key1=array_rand($pay_id_rnd);
            ShopPay::factory()->create([
                'shop_id' => $shop_id_rnd[$key],
                'pay_id' => $pay_id_rnd[$key1]
            ]);
        }
    }
}
