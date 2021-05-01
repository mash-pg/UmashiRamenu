<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class ShopDetailTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {

            //店舗idが存在しない場合
            //店舗idが数値で存在しない値が入った場合
            $browser->visit('http://localhost/shops/3')
                ->assertSee('404');
            //文字列が入った場合
            $browser->visit('http://localhost/shops/xxy')
                ->assertSee('404');
            //特殊文字が入った場合
            $browser->visit('http://localhost/shops/@')
                ->assertSee('404');

            //下記正常ルート
            //店舗名
            $browser->visit('http://localhost/shops/1')
                ->assertSee('町田商店');

            //メニュー
            $browser->visit('http://localhost/shops/1')
                ->assertSee('チャーシュー')
                ->assertSee('350円')
                ->assertSee('ラーメンB')
                ->assertSee('1000円');

            //イメージ画像
            $browser->visit('http://localhost/shops/1')
                ->assertSee('img/out/1/testC.jpg')
                ->assertSee('img/menu/ramen/1/testA.jpg')
                ->assertSee('img/menu/ramen/1/testB.jpg')
                ->assertSee('img/inner/1/testB.jpg');

            //電話番号
            $browser->visit('http://localhost/shops/1')
                ->assertSee('080-2222-4444');

            //こだわり
            $browser->visit('http://localhost/shops/1')
                ->assertSee('べんきょくをつぶすながら、銅どうも化学かが、ちょってみせよほど深ふかん');

            //アクセス
            //郵便番号
            $browser->visit('http://localhost/shops/1')
                ->assertSee('206')
                ->assertSee('7078');

            //住所
            $browser->visit('http://localhost/shops/1')
                ->assertSee('XXX市')
                ->assertSee('XXX区')
                ->assertSee('XXX町１−３３−４４');

            //ジャンル
            $browser->visit('http://localhost/shops/1')
                ->assertSee('醤油ラーメン')
                ->assertSee('塩ラーメン')
                ->assertSee('豚骨ラーメン')
                ->assertSee('魚介系ラーメン');

            //座席数
            $browser->visit('http://localhost/shops/1')
                ->assertSee('総座席数：30')
                ->assertSee('テーブル席4つ')
                ->assertSee('5人席')
                ->assertSee('10席');

            //喫煙
            $browser->visit('http://localhost/shops/1')
                ->assertSee('禁煙室あり');

            //支払い系
            $browser->visit('http://localhost/shops/1')
                ->assertSee('利用不可')
                ->assertSee('利用可能');

            //駐車場
            $browser->visit('http://localhost/shops/1')
                ->assertSee('駐車場：利用可能');

            //予算
            $browser->visit('http://localhost/shops/1')
                ->assertSee('1463円')
                ->assertSee('92718円');

            //店舗備考
            $browser->visit('http://localhost/shops/1')
                ->assertSee('標しんばんの旅人たちは参観さんはっきのよう');
        });
    }
}
