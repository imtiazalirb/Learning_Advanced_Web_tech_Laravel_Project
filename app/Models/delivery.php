<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'product_name',
        'address',
        'phone',
        'email',
        'status',
        'report',
    ];
}
