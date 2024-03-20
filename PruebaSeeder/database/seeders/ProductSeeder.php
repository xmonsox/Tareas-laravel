<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Product::create([
        //     'name' => 'Example',
        //     'short_description' => 'Lorem Ipsum',
        //     'description' => 'Lorem Ipsum Dolor Sit Amet...',
        //     'price' => 25
        // ]);

        // Product::create([
        //     'name' => 'Example 2',
        //     'short_description' => 'Lorem Ipsum',
        //     'description' => 'Lorem Ipsum Dolor Sit Amet...',
        //     'price' => 10
        // ]);

        Product::factory()->count(150)->create();

    }
}
