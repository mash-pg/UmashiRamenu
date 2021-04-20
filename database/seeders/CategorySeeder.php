<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Pay;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 7; $i++) {
            $category_type = array(
                '醤油ラーメン',
                '豚骨ラーメン',
                '味噌ラーメン',
                '塩ラーメン',
                '魚介系ラーメン',
                '家系ラーメン',
                'オリジナルラーメン',
            );
            Category::factory()->create([
                'type' => $category_type[$i],
            ]);
        }
    }
}
