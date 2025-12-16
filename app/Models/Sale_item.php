<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale_item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sale_id',
        'product_id',
        'sugar_id',
        'qty',
        'price',
        'subtotal',
        'ice_id'
    ];

    public function Sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }

    public function Product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
