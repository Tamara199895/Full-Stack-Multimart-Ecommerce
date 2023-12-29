<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PaymentInfo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentInfo>
 */
class PaymentInfoFactory extends Factory
{
    protected $model = PaymentInfo::class;

    public function definition()
    {
        return [
            'payment_type' => $this->faker->randomElement([0, 1]),
            'sell_id' => function () {
                return \App\Models\Sell::factory()->create()->id;
            },
            'total_paid' => $this->faker->randomFloat(2, 0, 1000),
            'tnx_id' => $this->faker->uuid,
            'card_brand' => $this->faker->creditCardType,
            'card_last_digit' => $this->faker->randomNumber(4),
            'payment_inv_link' => $this->faker->url,
            'created_at' => now(),
        ];
    }
}