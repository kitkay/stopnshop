<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_id',
        'staff_id',
        'description'
    ];

    /**
     * Show the name of staff who created the inventory
     *
     * @return BelongsTo
     */
    public function staff(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
            'staff_id',
            'id'
        );
    }
}