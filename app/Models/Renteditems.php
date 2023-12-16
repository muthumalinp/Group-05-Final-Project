<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renteditems extends Model
{
    use HasFactory;
    protected $table = 'renteditems';

    protected $fillable = [
        'ItemName',
        'ItemId',
        'ItemQuantity',
        'CustomerName',
        'CustomerEmail',
        'CustomerMobileNo',
        'price',
        'BorrowedDate',
        'ReturnedDate',

    ];

}
