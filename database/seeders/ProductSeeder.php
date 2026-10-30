<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $categoryIds = Category::pluck('id');

        Product::factory(24)->make()->each(function (Product $product) use ($categoryIds) {
            $product->category_id = $categoryIds->random();
            $product->save();
        });
    }
}
