<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'category_id' => function () {
                return \App\Models\ProductCategory::factory()->create()->id;
            },
            'subcategory_id' => function () {
                return \App\Models\ProductSubCategory::factory()->create()->id;
            },
        ];
    }
}