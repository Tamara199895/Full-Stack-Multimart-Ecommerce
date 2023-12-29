<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sell;

class SellFactory extends Factory
{
    protected $model = Sell::class;

    public function definition()
    {
      return [
        'customer_id' => \App\Models\User::factory(),
        'invoice_id' => null, 
        'sell_type' => $this->faker->randomElement([1, 2]),
        'sell_by' => null, 
        'bank_id' => null,
        'shipping_cost' => $this->faker->randomFloat(2, 0, 100),
        'total_vat_amount' => $this->faker->randomFloat(2, 0, 100),
        'total_discount' => $this->faker->randomFloat(2, 0, 100),
        'total_payable_amount' => $this->faker->randomFloat(2, 0, 1000),
        'total_paid' => $this->faker->randomFloat(2, 0, 1000),
        'total_due' => $this->faker->randomFloat(2, 0, 1000),
        'order_status' => $this->faker->randomElement([0, 1, 2, 3, 4, 5, 6]),
        'payment_type' => $this->faker->randomElement([0, 1]),
    ];
    }
  }