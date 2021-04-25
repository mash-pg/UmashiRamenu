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
           Shop::factory()->create([
                'smoking_id' => $smoking_id[$i]["id"]
            ]);
        }

    }
}
