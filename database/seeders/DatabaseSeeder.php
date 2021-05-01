<?php

namespace Database\Seeders;

use App\Models\SeatType;
use App\Models\ShopPay;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // //禁煙IDを取得する
        $this->call(SmokingSeeder::class);

        //お店データを挿入する
        $this->call(ShopSeeder::class);
        $this->call(AccessSeeder::class);
        $this->call(ShopEtcSeeder::class);
        $this->call(ParkingSeeder::class);

        //カテゴリーテーブル
        $this->call(CategorySeeder::class);
        $this->call(PaySeeder::class);
        $this->call(MenuTypeSeeder::class);
        $this->call(ImageTypeSeeder::class);
        $this->call(SeatTypeSeeder::class);

        //中間テーブル
        $this->call(ShopCategorySeeder::class);
        $this->call(ShopPaySeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(BudgetSeeder::class);
        $this->call(SeatSeeder::class);

    }
}
