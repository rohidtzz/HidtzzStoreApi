<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([
            'name' => 'Baju lengan pendek',
            'slug' => 'baju-lengan-pendek'
        ]);

        ProductCategory::create([
            'name' => 'Baju lengan panjang',
            'slug' => 'baju-lengan-panjang'
        ]);
    }
}
