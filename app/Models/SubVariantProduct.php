<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubVariantProduct extends Model
{
    use HasFactory;

    protected $gruarded = [];

    public function variantProduct()
    {
        return $this->belongsTo(VariantProduct::class);
    }
}
