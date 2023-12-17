<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_serial',
        'staff_id',
        'reportName',
        'description',
        'totalSales'
    ];

    /**
     * sales - get related sales
     *
     * @return HasMany
     */
    public function sales(): HasMany
    {
        return $this->hasMany(
            Sale::class,
            'serial',
            'sale_serial'
        );
    }
}
