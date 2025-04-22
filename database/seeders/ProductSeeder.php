<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop Asus',
                'price' => 8500000,
                'description' => 'Laptop dengan spesifikasi tinggi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone Samsung',
                'price' => 3500000,
                'description' => 'Smartphone dengan kamera terbaik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphone Sony',
                'price' => 1200000,
                'description' => 'Headphone dengan noise cancelling',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
