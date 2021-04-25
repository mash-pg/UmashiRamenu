<?php

namespace Database\Seeders;

use App\Models\MenuType;
use Illuminate\Database\Seeder;

const MENU = 'img/menu';

class MenuTypeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 3; $i++) {
            $menu_type = array(
                'ラーメン',
                '一品物',
                'ドリンク'
            );
            $path = array(
                MENU.'/ramen',
                MENU.'/ippin',
                MENU.'/drink'
            );
            MenuType::factory()->create([
                'type' => $menu_type[$i],
                'path' => $path[$i]
            ]);
        }
    }
}
