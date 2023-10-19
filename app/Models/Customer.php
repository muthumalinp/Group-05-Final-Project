<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Customer extends Authenticatable implements MustVerifyEmail {
    use HasFactory;

    protected $table = 'customers';
    protected $primarykey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'customer_fname',
        'customer_lname',
        'customer_email',
        'remember_token',
        'customer_pnumber',
        'customer_pwd'
    ];
}
