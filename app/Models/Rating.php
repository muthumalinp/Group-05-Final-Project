<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function hairstrs(){
        return $this->belongsTo('App\Models\Hairstr','product_ID');
        return $this->belongsTo('App\Models\Hairstr','name');
    }
}
