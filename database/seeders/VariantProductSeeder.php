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
            'name' => 'Putih',
            'price' => 125000,
            'image' => 'polos.jpg',
            'stock' => 10,
            'product_id' => 1
        ]);

        VariantProduct::create([
            'name' => 'Hitam',
            'price' => 120000,
            'image' => 'hitam.jpg',
            'stock' => 10,
            'product_id' => 1
        ]);

    }
}
