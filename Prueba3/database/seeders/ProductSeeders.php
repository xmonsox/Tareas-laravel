<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PruebaSeeder;
use Illuminate\Database\Seeder;

class ProductSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PruebaSeeder::factory()->count(150)->create();
    }
}
