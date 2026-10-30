<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = ucwords(fake()->unique()->words(3, true));
        $price = fake()->randomFloat(2, 10, 500);
        $hasSale = fake()->boolean(30);

        return [
            'name' => $name,
            'slug' => Str::slug($name).'-'.fake()->unique()->numberBetween(1000, 9999),
            'description' => fake()->paragraph(),
            'price' => $price,
            'sale_price' => $hasSale ? round($price * 0.8, 2) : null,
            'sku' => strtoupper(fake()->bothify('SKU-####??')),
            'stock' => fake()->numberBetween(0, 100),
            'is_active' => true,
            'is_featured' => fake()->boolean(25),
        ];
    }
}
