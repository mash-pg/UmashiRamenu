<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';

    public function type(){

        //１対１（イメージタイプテーブルからイメージテーブル）
        return $this->belongsTo(ImageType::class);
    }
}
