<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;
use App\Models\Budget;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop_id = Shop::all();
        $shop_id_rnd = array();
        for($i = 0; $i<2;$i++){
            array_push($shop_id_rnd,$shop_id[$i]["id"]);
        }
        for($j=0;$j<2;$j++){
        Budget::factory()->create([
            'shop_id' => $shop_id[$j],
            'min'=> rand(1000,1500),
            'max'=> rand(1501,99999),
        ]);
        }
    }
}
