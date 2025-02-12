<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'message',
        'category',
        'part_number',
        'english_name',
        'myanmar_name',
        'price',
        'stock_quantity',
        'movement_level',
        'category_type',
        'price_range',
        'photo',
        'slug',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
