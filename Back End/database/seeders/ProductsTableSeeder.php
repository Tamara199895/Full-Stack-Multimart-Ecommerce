<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductsTableSeeder extends Seeder
{
  public function run()
    {
      \Database\Factories\ProductFactory::new()->times(10)->create();
    }
}
