<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'serial',
        'product_id',
        'quantity',
        'amount'
    ];

    /**
     * products - get related products
     *
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(
            Product::class,
            'id',
            'product_id'
        );
    }
}
