<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class ImageType extends Model
{
    use HasFactory;
    protected $table = 'images_type';
}
