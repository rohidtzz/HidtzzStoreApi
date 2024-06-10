<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Biru Dongker',
            'slug' => 'Biru-Dongker',
            'description' => '
            Produk 100% terjamin New, Original & Authentic!<br>
            Di impor langsung dari Coach Warehouse di Amerika.<br>
            <br>
            Size: 27 (P) x 8 (L) x 17 (T) cm<br>
            <br>
            Pembelian Produk sudah termasuk:<br>
            1. Coach Card Care Instruction<br>
            2. Dust Bag<br>
            3. Paper Bag<br>
            4. Original Receipt<br>
            5. Certificate of Product<br>
            6. Price Tag<br>
            (Semua kelengkapan sama persis seperti saat membeli langsung di store)<br>
            <br>
            Kok Harga MURAH?<br>
            Produk yang kami jual adalah produk factory outlet di luar negri (contoh: US, Eropa, UK dll)<br>
            <br>
            Yakin Original?<br>
            Produk yang kami jual 100% original, Produk yang kami jual langsung dari Pabrik Coach dan karena itu kualitas nya sudah standar dengan produk yang di jual di toko.<br>
            <br>
            100% Garansi bila barang yang kami jual palsu!<br>
            <br>
            RESELLER ARE WELCOME!<br>
            (Special Price untuk pembelian diatas 3pcs)<br>
            <br>
            Happy Shopping!<br>
            LuckyWarehouse.',
            'price' => 125000,
            'thumbnail' => '/product/biru-dongker.jpg',
            // 'thumbnail' => 'baju1.png',
            'stock' => 350,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Biru Turkish',
            'slug' => 'Biru-Turkish',
            'description' => '
            Produk 100% terjamin New, Original & Authentic!<br>
            Di impor langsung dari Coach Warehouse di Amerika.<br>
            <br>
            Size: 27 (P) x 8 (L) x 17 (T) cm<br>
            <br>
            Pembelian Produk sudah termasuk:<br>
            1. Coach Card Care Instruction<br>
            2. Dust Bag<br>
            3. Paper Bag<br>
            4. Original Receipt<br>
            5. Certificate of Product<br>
            6. Price Tag<br>
            (Semua kelengkapan sama persis seperti saat membeli langsung di store)<br>
            <br>
            Kok Harga MURAH?<br>
            Produk yang kami jual adalah produk factory outlet di luar negri (contoh: US, Eropa, UK dll)<br>
            <br>
            Yakin Original?<br>
            Produk yang kami jual 100% original, Produk yang kami jual langsung dari Pabrik Coach dan karena itu kualitas nya sudah standar dengan produk yang di jual di toko.<br>
            <br>
            100% Garansi bila barang yang kami jual palsu!<br>
            <br>
            RESELLER ARE WELCOME!<br>
            (Special Price untuk pembelian diatas 3pcs)<br>
            <br>
            Happy Shopping!<br>
            LuckyWarehouse.',
            'price' => 120000,
            'thumbnail' => '/product/biru-turkish.jpg',
            'stock' => 350,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Hijau Army',
            'slug' => 'Hijau-Army',
            'description' => '
            Produk 100% terjamin New, Original & Authentic!<br>
            Di impor langsung dari Coach Warehouse di Amerika.<br>
            <br>
            Size: 27 (P) x 8 (L) x 17 (T) cm<br>
            <br>
            Pembelian Produk sudah termasuk:<br>
            1. Coach Card Care Instruction<br>
            2. Dust Bag<br>
            3. Paper Bag<br>
            4. Original Receipt<br>
            5. Certificate of Product<br>
            6. Price Tag<br>
            (Semua kelengkapan sama persis seperti saat membeli langsung di store)<br>
            <br>
            Kok Harga MURAH?<br>
            Produk yang kami jual adalah produk factory outlet di luar negri (contoh: US, Eropa, UK dll)<br>
            <br>
            Yakin Original?<br>
            Produk yang kami jual 100% original, Produk yang kami jual langsung dari Pabrik Coach dan karena itu kualitas nya sudah standar dengan produk yang di jual di toko.<br>
            <br>
            100% Garansi bila barang yang kami jual palsu!<br>
            <br>
            RESELLER ARE WELCOME!<br>
            (Special Price untuk pembelian diatas 3pcs)<br>
            <br>
            Happy Shopping!<br>
            LuckyWarehouse.',
            'price' => 120000,
            'thumbnail' => '/product/hijau-army.jpg',
            'stock' => 350,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Hitam',
            'slug' => 'Hitam',
            'description' => '
            Produk 100% terjamin New, Original & Authentic!<br>
            Di impor langsung dari Coach Warehouse di Amerika.<br>
            <br>
            Size: 27 (P) x 8 (L) x 17 (T) cm<br>
            <br>
            Pembelian Produk sudah termasuk:<br>
            1. Coach Card Care Instruction<br>
            2. Dust Bag<br>
            3. Paper Bag<br>
            4. Original Receipt<br>
            5. Certificate of Product<br>
            6. Price Tag<br>
            (Semua kelengkapan sama persis seperti saat membeli langsung di store)<br>
            <br>
            Kok Harga MURAH?<br>
            Produk yang kami jual adalah produk factory outlet di luar negri (contoh: US, Eropa, UK dll)<br>
            <br>
            Yakin Original?<br>
            Produk yang kami jual 100% original, Produk yang kami jual langsung dari Pabrik Coach dan karena itu kualitas nya sudah standar dengan produk yang di jual di toko.<br>
            <br>
            100% Garansi bila barang yang kami jual palsu!<br>
            <br>
            RESELLER ARE WELCOME!<br>
            (Special Price untuk pembelian diatas 3pcs)<br>
            <br>
            Happy Shopping!<br>
            LuckyWarehouse.',
            'price' => 120000,
            'thumbnail' => '/product/hitam.jpg',
            'stock' => 350,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Merah Marun',
            'slug' => 'Merah-Marun',
            'description' => '
            Produk 100% terjamin New, Original & Authentic!<br>
            Di impor langsung dari Coach Warehouse di Amerika.<br>
            <br>
            Size: 27 (P) x 8 (L) x 17 (T) cm<br>
            <br>
            Pembelian Produk sudah termasuk:<br>
            1. Coach Card Care Instruction<br>
            2. Dust Bag<br>
            3. Paper Bag<br>
            4. Original Receipt<br>
            5. Certificate of Product<br>
            6. Price Tag<br>
            (Semua kelengkapan sama persis seperti saat membeli langsung di store)<br>
            <br>
            Kok Harga MURAH?<br>
            Produk yang kami jual adalah produk factory outlet di luar negri (contoh: US, Eropa, UK dll)<br>
            <br>
            Yakin Original?<br>
            Produk yang kami jual 100% original, Produk yang kami jual langsung dari Pabrik Coach dan karena itu kualitas nya sudah standar dengan produk yang di jual di toko.<br>
            <br>
            100% Garansi bila barang yang kami jual palsu!<br>
            <br>
            RESELLER ARE WELCOME!<br>
            (Special Price untuk pembelian diatas 3pcs)<br>
            <br>
            Happy Shopping!<br>
            LuckyWarehouse.',
            'price' => 120000,
            'thumbnail' => '/product/merah-marun.jpg',
            'stock' => 350,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Polos',
            'slug' => 'Polos',
            'description' => '
            Produk 100% terjamin New, Original & Authentic!<br>
            Di impor langsung dari Coach Warehouse di Amerika.<br>
            <br>
            Size: 27 (P) x 8 (L) x 17 (T) cm<br>
            <br>
            Pembelian Produk sudah termasuk:<br>
            1. Coach Card Care Instruction<br>
            2. Dust Bag<br>
            3. Paper Bag<br>
            4. Original Receipt<br>
            5. Certificate of Product<br>
            6. Price Tag<br>
            (Semua kelengkapan sama persis seperti saat membeli langsung di store)<br>
            <br>
            Kok Harga MURAH?<br>
            Produk yang kami jual adalah produk factory outlet di luar negri (contoh: US, Eropa, UK dll)<br>
            <br>
            Yakin Original?<br>
            Produk yang kami jual 100% original, Produk yang kami jual langsung dari Pabrik Coach dan karena itu kualitas nya sudah standar dengan produk yang di jual di toko.<br>
            <br>
            100% Garansi bila barang yang kami jual palsu!<br>
            <br>
            RESELLER ARE WELCOME!<br>
            (Special Price untuk pembelian diatas 3pcs)<br>
            <br>
            Happy Shopping!<br>
            LuckyWarehouse.',
            'price' => 120000,
            'thumbnail' => '/product/polos.jpg',
            'stock' => 350,
            'category_id' => 2,
        ]);
    }
}
