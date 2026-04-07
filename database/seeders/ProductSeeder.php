<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
    // Electronics (category_id = 1)
    [
        'name' => 'Laptop ASUS VivoBook',
        'details' => 'Lightweight laptop with Intel i5 processor and 8GB RAM.',
        'price' => 750.00,
        'category_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Samsung Galaxy Smartphone',
        'details' => 'Android smartphone with AMOLED display and 128GB storage.',
        'price' => 499.99,
        'category_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Wireless Headphones',
        'details' => 'Noise-cancelling over-ear Bluetooth headphones.',
        'price' => 129.99,
        'category_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // Clothing (category_id = 2)
    [
        'name' => 'Men\'s T-Shirt',
        'details' => 'Comfortable cotton t-shirt for everyday wear.',
        'price' => 15.99,
        'category_id' => 2,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Women\'s Jacket',
        'details' => 'Stylish jacket suitable for cold weather.',
        'price' => 59.99,
        'category_id' => 2,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Jeans Denim',
        'details' => 'Classic blue denim jeans with slim fit design.',
        'price' => 39.99,
        'category_id' => 2,
        'created_at' => now(),
        'updated_at' => now(),
    ],

    // Books (category_id = 3)
    [
        'name' => 'Clean Code',
        'details' => 'A handbook of agile software craftsmanship by Robert C. Martin.',
        'price' => 29.99,
        'category_id' => 3,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Atomic Habits',
        'details' => 'A guide to building good habits and breaking bad ones.',
        'price' => 19.99,
        'category_id' => 3,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'The Pragmatic Programmer',
        'details' => 'Essential tips and practices for modern software developers.',
        'price' => 34.99,
        'category_id' => 3,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    ]);
}
}