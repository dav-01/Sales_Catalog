<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

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
            'code' => '1005458',
            'name' => 'Macarron 120g',
            'price' => 2499.99,
            'stock' => 9,
        ]);

        Product::create([
            'code' => '1005348',
            'name' => 'Fideo 254g',
            'price' => 2499.99,
            'stock' => 9,
        ]);

        Product::create([
            'code' => '1005668',
            'name' => 'Spaggeti 1000g',
            'price' => 2499.99,
            'stock' => 9,
        ]);

        Product::create([
            'code' => '1005243',
            'name' => 'Macarron 500g',
            'price' => 2499.99,
            'stock' => 9,
        ]);

        Product::create([
            'code' => '1005238',
            'name' => 'Fideo 120g',
            'price' => 2499.99,
            'stock' => 9,
        ]);

    }
}
