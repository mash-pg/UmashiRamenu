<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shops';

    public function categories()
    {
        $table = 'shops_categories';
        $class = Category::class;
        $id = 'shop_id';
        return $this->belongsToMany($class,$table,$id,'category_id');
    }

    public function menus_ref()
    {
        return $this->hasMany(Menu::class)->with(["type"]);
    }
    public function images_ref(){
        return $this->hasMany(Image::class)->with(["type"]);
    }

    public function menus()
    {
        $table = 'menus';
        $class = MenuType::class;
        $id = 'shop_id';
        return $this
            ->belongsToMany($class,$table,$id,'type_id')
            ->withPivot('price','menu','img');
    }

    public function images(){
        $table = 'images';
        $class = ImageType::class;
        $id = 'shop_id';

        return $this
            ->belongsToMany($class,$table,$id,'type_id')
            ->withPivot('img','comments');
    }

    public function pays(){
        $table = 'shops_pays';
        $class = Pay::class;
        $id = 'shop_id';
        return $this->belongsToMany($class,$table,$id,'pay_id');
    }
}
