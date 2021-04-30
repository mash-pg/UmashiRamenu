<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            //duskで$browse->visit('/shop/top')のh1?に店舗名がある確認コード
            $browser->visit('http://localhost/shops/1')
                ->assertSee('町田商店test');

            $browser->visit('http://localhost/shops/1')
                ->assertSee('町田商店');
        });
    }
}
