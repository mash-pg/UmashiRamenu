<?php

namespace Database\Seeders;

use App\Models\Access;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop_id = Shop::all();
        $shop_id_ary = array();

        for($i = 0; $i<2;$i++){
            array_push($shop_id_ary,$shop_id[$i]["id"]);
        }
        for($j=0;$j<2;$j++) {
            $prefectures = array(
                '東京都',
                '京都府'
            );
            $address1 = array(
                'XXX市',
                'YYY市',
            );
            $address2 = array(
                'XXX区',
                'ZZZ区'
            );
            $address3 = array(
                'XXX町１−３３−４４',
                'YYY町１−３３−４４',
            );
            Access::factory()->create([
                'shop_id' => $shop_id_ary[$j],
                'prefectures' => $prefectures[$j],
                'address1' => $address1[$j],
                'address2' => $address2[$j],
                'address3' => $address3[$j],
            ]);
        }
    }
}
