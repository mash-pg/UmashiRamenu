<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shops';

    public function menus(){
        //１対多(店舗テーブルからメニュー)
        //var_export(Menu::class->with("type"));
        return $this->hasMany(Menu::class->with("type"));
    }

    public function images(){
        //１対多(店舗テーブルから画像)
        //var_export(Image::class->with("type"));
        return $this->hasMany(Image::class->with("type"));
    }

    public function categories()
    {
        $table = 'shops_categories';
        $class = Category::class;
        $id = 'shop_id';
        return $this->belongsToMany($class,$table,$id,'category_id');
    }

    public function pays(){
        $table = 'shops_pays';
        $class = Pay::class;
        $id = 'shop_id';
        return $this->belongsToMany($class,$table,$id,'pay_id');
    }
}
