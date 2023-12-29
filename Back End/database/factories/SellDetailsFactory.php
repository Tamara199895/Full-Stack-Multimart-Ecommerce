<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Sell_details;

class SellDetailsFactory extends Factory
{
    protected $model = Sell_details::class;

    public function definition()
    {
        return [
            'product_id' => \App\Models\Product::factory(),
            'sell_id' => \App\Models\Sell::factory(),
            'unit_product_cost' => $this->faker->randomFloat(2, 0, 100),
            'unit_sell_price' => $this->faker->randomFloat(2, 0, 100),
            'unit_vat' => $this->faker->randomFloat(2, 0, 100),
            'sale_quantity' => $this->faker->randomNumber(2),
            'total_discount' => $this->faker->randomFloat(2, 0, 100),
            'total_payable_amount' => $this->faker->randomFloat(2, 0, 1000),
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}