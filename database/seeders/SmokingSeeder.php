<?php

namespace Database\Seeders;

use App\Models\Smoking;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmokingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 4; $i++) {
            $smoking_type = array(
                '禁煙室あり',
                '全席喫煙',
                '分煙',
                '全席禁煙'
            );
            Smoking::factory()->create([
                'type' => $smoking_type[$i],
            ]);
        }
    }
}
