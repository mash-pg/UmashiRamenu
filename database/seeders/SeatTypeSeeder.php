<?php

namespace Database\Seeders;

use App\Models\SeatType;
use Illuminate\Database\Seeder;

class SeatTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = array(
            'カウンター',
            'テーブル',
        );
        for($i = 0; $i<2;$i++){
            SeatType::factory()->create([
                'type'=> $type[$i]
            ]);
        }
    }
}
