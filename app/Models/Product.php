<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'sale_price',
        'quantity',
        'sku',
        'image',
        'rating',
        'brand',
        'color',
        'size',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
