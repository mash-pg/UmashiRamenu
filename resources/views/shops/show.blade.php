<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
    <h1>店舗ページ</h1>
    <h1>{{$shop->shop_name}}</h1>
    <h1>メニュー</h1>
    <div style="display: grid; grid-column: 1 / 3;grid-template-columns: repeat(3, 1fr);column-gap: 12px;">
    @foreach($shop->menus as $menu)
        {{$menu->menu}}:{{$menu->price}}
    @endforeach
    </div>

    <h1>イメージ画像</h1>
    @foreach($shop->images as $image)
        {{$image->type->type}} || {{$image->image_path}}
    @endforeach
    <h1>電話番号</h1>
    <p>{{$shop->tel}}</p>
    <h1>営業日</h1>
    <p>{{$shop->business_day}}</p>
    <h1>こだわり</h1>
    <p>{{$shop->kodawari}}</p>
    <h1>アクセス</h1>
    <p>{{$shop->access->zip_code}}</p>
    <p>
        {{$shop->access->prefecture}}
        {{$shop->access->address1}}
        {{$shop->access->address2}}
        {{$shop->access->address3}}
    </p>
    <h1>座席数</h1>
    <p>総座席数：{{$shop->seat->seat}}</p>
    <p>テーブル席：テーブル席{{$shop->seat->table_number}}つ{{$shop->seat->table_seat}}人席</p>
    <p>カウンター：{{$shop->seat->counter}}席</p>
    <h1>喫煙</h1>
    <p>{{$shop->smoking->type}}</p>
    <h1>駐車場</h1>
    <p>駐車場：{{is_null($shop->parking) ? "不可能" : "可能"}}</p>
    <h1>予算</h1>
    <p>予算：{{$shop->budget->min}}円〜{{$shop->budget->max}}円</p>
    <h1>店舗備考</h1>
    <p>店舗備考：{{$shop->shop_etc->etc}}</p>
    </body>
</html>
