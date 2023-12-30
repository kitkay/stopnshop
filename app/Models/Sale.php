<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial',
        'inventory_id',
        'quantity',
        'amount'
    ];

    /**
     * inventories - This sales has many inventories on it
     * which simply means a single sale serial or entry has
     * many inventories on it since one inventory has also
     * alot of products listed in a single inventory id or code
     *
     * @return HasMany
     */
    public function inventories(): HasMany
    {
        return $this->hasMany(
            Inventory::class,
            'id',
            'inventory_id'
        );
    }
}
