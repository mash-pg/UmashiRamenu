<?php

namespace Database\Seeders;

use App\Models\ImageType;
use Illuminate\Database\Seeder;

const MENU_IMG = 'img/';

class ImageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 2; $i++) {
            $img_type = array(
                '内観',
                '外観',
            );
            $path = array(
                MENU_IMG . 'inner/',
                MENU_IMG . 'out/'
            );
            ImageType::factory()->create([
                'type' => $img_type[$i],
                'path' => $path[$i]
            ]);
        }
        //ImageType::factory()->count(7)->create();
    }
}
