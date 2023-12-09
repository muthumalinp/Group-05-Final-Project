<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'price']; // Update this line
    use HasFactory;
}
