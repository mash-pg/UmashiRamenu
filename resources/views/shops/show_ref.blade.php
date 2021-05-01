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
            {{$image->type->type}}イメージ || {{$image->image_path}}
        </div>
    @endforeach
    @foreach($shop->menus_ref as $menus)
        <div>
            {{$menus->type->type}}イメージ || {{$menus->image_path}}
        </div>
    @endforeach
    <h1>電話番号</h1>
    <p>{{$shop->tel}}</p>
    <h1>営業日</h1>
    <p>{{$shop->business_day}}</p>
    <h1>こだわり</h1>
    <p>{{$shop->kodawari}}</p>
    <h1>アクセス</h1>
    <p>{{$shop->access_ref->zip_code}}</p>
    <p>
        {{$shop->access_ref->prefecture}}
        {{$shop->access_ref->address1}}
        {{$shop->access_ref->address2}}
        {{$shop->access_ref->address3}}
    </p>
    <h1>ジャンル</h1>
    @foreach ($shop->categories as $category )
        {{$category->type}}
    @endforeach
    <h1>座席数</h1>
    <p>総座席数：{{$shop->seat_ref->seat}}</p>
    <p>テーブル席：テーブル席{{$shop->seat_ref->table_number}}つ {{$shop->seat_ref->table_seat}}人席</p>
    <p>カウンター：{{$shop->seat_ref->counter}}席</p>
    <h1>喫煙</h1>
    <p>{{$shop->smoking_ref->type}}</p>
    <h1>支払い系</h1>
    <p>
        @foreach ($shop->pays as $pay )
            {{$pay->type}}:可能<br>
        @endforeach
    </p>
    <h1>駐車場</h1>
    <p>駐車場 : {{is_null($shop->parking_ref) ? "不可能" : "可能"}}</p>
    <h1>予算</h1>
{{--    <p>予算：{{$budget->min}}円〜{{$budget->max}}円</p>--}}
{{--    <h1>店舗備考</h1>--}}
{{--    <p>店舗備考：{{$shop_etc->etc}}</p>--}}
    </body>
</html>
