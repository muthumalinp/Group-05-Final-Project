<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';
    protected $primaryKey = 'id';
    protected $fillable = ['owner_fname','owner_lname','owner_email','owner_phone','owner_address','owner bio','owner_photo','owner_addetails','owner_rewards'];
    use HasFactory;
}
