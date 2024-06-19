<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantProduct extends Model
{
    use HasFactory;

    protected $gruarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function subVariantProducts()
    {
        return $this->hasMany(SubVariantProduct::class);
    }
}
