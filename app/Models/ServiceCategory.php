<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = 'service_categories';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name'];
    use HasFactory;
}
