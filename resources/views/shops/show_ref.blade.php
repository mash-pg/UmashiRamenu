<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
    <h1>店舗ページ</h1>
    <h1>{{$shop->shop_name}}</h1>
    <h1>メニュー</h1>


{{--    6こに分けたいや　メニューと料金の間に「：」を入れたい　などは表示上の問題なのでview側or(view model)で解決する。--}}
    <div style="display: grid;  grid-column: 1 / 3;grid-template-columns: repeat(3, 1fr);column-gap: 12px;">
        @foreach($shop->menus_ref as $menu)
            <div>
                {{$menu->menu}}:{{$menu->price}}
            </div>
        @endforeach
    </div>

    <h1>イメージ画像</h1>
    @foreach($shop->images_ref as $image)
        <div>
            {{$image->type->type}} / {{$image->image_path}}
        </div>
    @endforeach
{{--    @foreach ($images as $key => $values )--}}
{{--        {{$values}}<br>--}}
{{--        <img src={{$values}} alt="ラーメン画像と内観イメージ">--}}
{{--    @endforeach--}}
{{--    <h1>電話番号</h1>--}}
{{--    <p>{{$shops->tel}}</p>--}}
{{--    <h1>営業日</h1>--}}
{{--    <p>{{$shops->business_day}}</p>--}}
{{--    <h1>こだわり</h1>--}}
{{--    <p>{{$shops->kodawari}}</p>--}}
{{--    <h1>アクセス</h1>--}}
{{--    <p>{{$access->post_number_1}}-{{$access->post_number_2}}</p>--}}
{{--    <p>--}}
{{--        {{$access->prefecture}}--}}
{{--        {{$access->address1}}--}}
{{--        {{$access->address2}}--}}
{{--        {{$access->address3}}--}}
{{--    </p>--}}
{{--    <h1>ジャンル</h1>--}}
{{--    @foreach ($categories as $key => $values )--}}
{{--        {{$values}}--}}
{{--    @endforeach--}}
{{--    <h1>座席数</h1>--}}
{{--    <p>総座席数：{{$seats->seat}}</p>--}}
{{--    <p>テーブル席：テーブル席{{$seats->table_number}}つ {{$seats->table_seat}}人席</p>--}}
{{--    <p>カウンター：{{$seats->counter}}席</p>--}}
{{--    <h1>喫煙</h1>--}}
{{--    <p>{{$smoking->type}}</p>--}}
{{--    <h1>支払い系</h1>--}}
{{--    <p>--}}
{{--        @foreach ($credit_type as $key => $values )--}}
{{--            {{$values}}<br>--}}
{{--        @endforeach--}}
{{--    </p>--}}
{{--    <h1>駐車場</h1>--}}
{{--    @foreach ($parking_area as $key => $values )--}}
{{--        駐車場：{{$values}}<br>--}}
{{--    @endforeach--}}
{{--    <h1>予算</h1>--}}
{{--    <p>予算：{{$budget->min}}円〜{{$budget->max}}円</p>--}}
{{--    <h1>店舗備考</h1>--}}
{{--    <p>店舗備考：{{$shop_etc->etc}}</p>--}}
    </body>
</html>
