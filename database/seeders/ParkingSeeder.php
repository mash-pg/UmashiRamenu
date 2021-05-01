<?php

namespace Database\Seeders;

use App\Models\Parking;
use App\Models\Pay;
use App\Models\Shop;
use App\Models\ShopPay;
use Illuminate\Database\Seeder;

class ParkingSeeder extends Seeder
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
        $shop_id_ary = array();

        for($i = 0; $i<2;$i++){
            array_push($shop_id_ary,$shop_id[$i]["id"]);
        }

        for($j=0;$j<2;$j++){
            $parking = array(
                1,
                2
            );
            Parking::factory()->create([
                'shop_id' => $shop_id_ary[$j],
                'parking' => $parking[$j]
            ]);
        }
    }
}
