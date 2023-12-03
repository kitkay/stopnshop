<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'staff_id',
        'price_id',
        'sku',
        'productName',
        'description',
        'unit',
        'quantity'
    ];
}
