<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Factories\UserFactory;
use Database\Factories\ProductFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $this->call([
        UsersTableSeeder::class,
        ProductCategoriesTableSeeder::class,
        ProductsTableSeeder::class,
        PaymentInfoTableSeeder::class,
        SellTableSeeder::class,
        SellDetailsTableSeeder::class,
        SellOrderAddressTableSeeder::class,

    ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
