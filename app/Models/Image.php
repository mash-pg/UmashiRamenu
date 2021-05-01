<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';

    public function type(){
        return $this->belongsTo(ImageType::class);
    }

    /**
     * 画像のパスを返す
     * @return string
     */
    public function getImagePathAttribute(){
        return sprintf("%s%s",
            $this->type->path,
            $this->img
        );
    }
}
