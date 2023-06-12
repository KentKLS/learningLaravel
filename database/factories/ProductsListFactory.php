<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductsList>
 */
class ProductsListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "product_name" => $this->faker->word(),
            "product_description" => $this->faker->paragraph(),
            "product_price" => $this->faker->numberBetween(1000, 10000),
            "product_weight" => $this->faker->numberBetween(0, 2500),
            "product_stock" => $this->faker->numberBetween(0, 100)
        ];
    }
}
