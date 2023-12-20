<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guploadimage extends Model
{
    use HasFactory;
    protected $table = 'guploadimages';
    protected $fillable = [
        'page_name',
        'image_name',
        'profile_image',
    ];
}
