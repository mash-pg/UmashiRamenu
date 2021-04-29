<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\Smoking;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smoking_id = Smoking::all();

        for ($i=0; $i < 2; $i++) {
            $shop_name = array(
                '町田商店',
                '長浜ラーメン',
            );
            $tel = array(
                '080-2222-4444',
                '072-2222'
            );
           Shop::factory()->create([
                'shop_name' => $shop_name[$i],
                'tel' => $tel[$i],
                'smoking_id' => $smoking_id[$i]["id"]
            ]);
        }
    }
}
