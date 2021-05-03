<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';

    public function type(){

        //1対1の関係（メニュータイプからメニューへアクセス）
        return $this->belongsTo(MenuType::class);
    }
}
