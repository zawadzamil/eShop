<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'address',
        'total_amount',
        'payment_method',
        'payment_status',
        'status',

    ];
}
