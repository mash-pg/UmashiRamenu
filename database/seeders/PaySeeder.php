<?php

namespace Database\Seeders;

use App\Models\Pay;
use App\Models\Smoking;
use Illuminate\Database\Seeder;

class PaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) {
            $pay_type = array(
                'クレジット',
                '電子マネー',
                'QRコード決済'
            );
            Pay::factory()->create([
                'type' => $pay_type[$i],
            ]);
        }

    }
}
