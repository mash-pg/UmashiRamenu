<?php

namespace Database\Seeders;

use App\Models\Seat;
use App\Models\SeatType;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $shop_id = Shop::all();
        $seat_id = SeatType::all();
        $shop_id_rnd = array();
        $seat_id_rnd = array();
        for($i = 0; $i<2;$i++){
            array_push($shop_id_rnd,$shop_id[$i]["id"]);
        }
        for($i = 0; $i<2;$i++){
            array_push($seat_id_rnd,$seat_id[$i]["id"]);
        }
        for ($i = 0;$i<5;$i++){
            $table_number = rand(4,5);
            $table_seat = rand(4,5);
            $counter = rand(10,15);
            $seat = ($table_number * $table_seat) + $counter;
            $key=shuffle($shop_id_rnd);
            $key1=shuffle($seat_id_rnd);
            Seat::factory()->create([
                'shop_id' => $shop_id_rnd[$key],
                'type_id' => $seat_id_rnd[$key1],
                'seat' => $seat,
                'counter' => $counter,
                'table_number' => $table_number,
                'table_seat' => $table_seat,
            ]);
        }
    }
}
