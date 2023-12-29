<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductSubCategory>
 */
class ProductSubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      return [
        'category_id' => ProductCategory::factory(), // Generate a valid category_id
    ];
    }
}
