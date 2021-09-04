<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'image',
        'quantity',
        'description',
        'status',
        'offer_price',
        'catagory_id',
        'brand_id',
    ];
}
