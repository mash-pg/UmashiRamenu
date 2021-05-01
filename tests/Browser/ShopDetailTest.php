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
                ->assertSee('ラーメンB')
                ->assertSee('1000円');

            //イメージ画像
            $browser->visit('http://localhost/shops/1')
                ->assertSee('img/out/1/testA.jpg')
                ->assertSee('img/out/1/testC.jpg')
                ->assertSee('img/inner/1/testD.jpg')
                ->assertSee('img/menu/ippin/1/testB.jpg');

            //電話番号
            $browser->visit('http://localhost/shops/1')
                ->assertSee('080-2222-4444');

            //営業日
            $browser->visit('http://localhost/shops/1')
                ->assertSee('いのなから水へ落おち着ついて叫さけん命めい延のびあがり、');

            //こだわり
            $browser->visit('http://localhost/shops/1')
                ->assertSee('をもうまるでもなかぎをもった。汽車だったよ」さっきの、ほんとしまわり、');

            //アクセス
            //郵便番号
            $browser->visit('http://localhost/shops/1')
                ->assertSee('599')
                ->assertSee('3760');

            //住所
            $browser->visit('http://localhost/shops/1')
                ->assertSee('XXX市')
                ->assertSee('XXX区')
                ->assertSee('XXX町１−３３−４４');

            //ジャンル
            $browser->visit('http://localhost/shops/1')
                ->assertSee('塩ラーメン')
                ->assertSee('醤油ラーメン')
                ->assertSee('オリジナルラーメン');

            //座席数
            $browser->visit('http://localhost/shops/1')
                ->assertSee('総座席数：32')
                ->assertSee('テーブル席5つ')
                ->assertSee('4人席')
                ->assertSee('12席');

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
                ->assertSee('1120円')
                ->assertSee('67318円');

            //店舗備考
            $browser->visit('http://localhost/shops/1')
                ->assertSee('しんしゅのようなもの肩かたくなったようです');
        });
    }
}
