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
        // Create sample data for products
        Product::create([
            'name' => 'Premium Headphones',
            'price' => 129.99,
            'description' => 'Experience superior sound quality with these premium wireless headphones.'
        ]);

        Product::create([
            'name' => 'Smart Watch',
            'price' => 99.50,
            'description' => 'Stay connected and monitor your fitness with this stylish and feature-rich smartwatch.'
        ]);

        Product::create([
            'name' => 'Laptop Backpack',
            'price' => 49.99,
            'description' => 'Carry your laptop and essentials comfortably with this durable and spacious backpack.'
        ]);

        Product::create([
            'name' => 'Wireless Mouse',
            'price' => 24.99,
            'description' => 'Enjoy seamless navigation and precise control with this ergonomic wireless mouse.
            '
        ]);

        Product::create([
            'name' => 'Portable Power Bank',
            'price' => 39.99,
            'description' => 'Never run out of battery with this high-capacity power bank for your mobile devices.
            '
        ]);

        // Add more sample data as needed
    }
}
