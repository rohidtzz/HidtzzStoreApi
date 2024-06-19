<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\VariantProduct;

class VariantProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VariantProduct::create([
            'name' => 'biru pendek',
            'price' => 5000,
            'image' => '/product/variant/biru-pendek.jpg',
            'stock' => 10,
            'product_id' => 1
        ]);

        VariantProduct::create([
            'name' => 'Merah',
            'price' => 2000,
            'image' => '/product/variant/merah-pendek.jpg',
            'stock' => 10,
            'product_id' => 5
        ]);

    }
}
