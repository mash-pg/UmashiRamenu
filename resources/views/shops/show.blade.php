<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>

    <h1>店舗ページ</h1>
    <h1>{{$shops->shop_name}}</h1>
    </body>
</html>
