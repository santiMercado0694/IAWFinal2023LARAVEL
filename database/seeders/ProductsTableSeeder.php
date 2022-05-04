<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'stock' => 0,          
            'category_id' => 1,
            'image_path' => 'macbook-pro.png'
        ]);

        Product::create([
            'name' => 'Dell Vostro 3557',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'stock' => 2,
            'category_id' => 1,
            'image_path' => 'dell-v3557.png'
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 649.99,
            'stock' => 8,   
            'category_id' => 1,
            'image_path' => 'iphone-11-pro.png'
        ]);

        Product::create([
            'name' => 'Remax 610D Headset',
            'details' => 'Auricualres ideales para escuchar musica',
            'price' => 8.99,
            'stock' => 10,
            'category_id' => 1,      
            'image_path' => 'remax-610d.jpg'
        ]);

        Product::create([
            'name' => 'Samsung LED TV',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'stock' => 0,
            'category_id' => 1,
            'image_path' => 'samsung-led-24.png'
        ]);

        Product::create([
            'name' => 'Samsung Camara Digital',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 144.99,
            'stock' => 2,
            'category_id' => 1,
            'image_path' => 'samsung-mv800.jpg'
        ]);

        Product::create([
            'name' => 'Huawei GR 5 2017',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 148.99,
            'stock' => 7,
            'category_id' => 1,
            'image_path' => 'gr5-2017.jpg'
        ]);

    }
}
