<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadimage extends Model
{
    use HasFactory;
    protected $table = 'uploadimages';
    protected $fillable = [
        'page_name',
        'image_name',
        'profile_image',
    ];
}
