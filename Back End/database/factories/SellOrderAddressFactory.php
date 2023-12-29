<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SellOrderAddress;

class SellOrderAddressFactory extends Factory
{
    protected $model = SellOrderAddress::class;

    public function definition()
    {
        return [
            'sell_id' => \App\Models\Sell::factory(),
            'email' => $this->faker->email,
            'name' => $this->faker->name,
            'shipping_phone' => $this->faker->phoneNumber,
            'shipping_address' => $this->faker->address,
            'shipping_city' => $this->faker->city,
            'shipping_country' => $this->faker->country,
            'shipping_zip' => $this->faker->postcode,
            'shipping_state' => $this->faker->state,
            'billing_first_name' => $this->faker->firstName,
            'billing_last_name' => $this->faker->lastName,
            'billing_email' => $this->faker->email,
            'billing_phone' => $this->faker->phoneNumber,
            'billing_address' => $this->faker->address,
            'billing_city' => $this->faker->city,
            'billing_country' => $this->faker->country,
            'billing_zip' => $this->faker->postcode,
            'billing_state' => $this->faker->state,
            'note' => $this->faker->sentence,
        ];
    }
}