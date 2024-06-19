<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public function variantProducts()
    {
        return $this->hasMany(VariantProduct::class, 'product_id', 'id');
    }
}
