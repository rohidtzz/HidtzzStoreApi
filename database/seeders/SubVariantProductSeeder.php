<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SubVariantProduct;

class SubVariantProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubVariantProduct::create([
            'name' => 'S',
            'price' => 125000,
            'stock' => 10,
            'variant_product_id' => 1
        ]);

        SubVariantProduct::create([
            'name' => 'M',
            'price' => 120000,
            'stock' => 10,
            'variant_product_id' => 1
        ]);
    }
}
