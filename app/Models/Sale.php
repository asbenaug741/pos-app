<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invoice',
        'user_id',
        'total_price',
        'payment_method',
        'created_at',
        'note'
    ];

    public function genInvoice()
    {
        $prefix = 'INV-';
        do {
            $randomInv = $prefix . mt_rand(1000, 9999);
        } while (self::where('invoice', $randomInv)->exists());

        return $randomInv;
    }

    public function Sales_items(): HasMany
    {
        return $this->hasMany(Sale_item::class, 'sale_id');
    }

    public function Users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
