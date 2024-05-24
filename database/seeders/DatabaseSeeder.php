<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Order::truncate();
        User::truncate();
        Product::truncate();
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'حسین معصوم پور',
            'email' => 'ahoseinmasumpoora@gmail.com',
            'phone' => '02600000000',
            'mobile' => '09374838311',
        ]);

        $prices = collect([
            300000,
            400000,
            330000,
            550000
        ]);

        for ($i = 1; $i < 11; $i++) {
            Product::create([
                'name' => 'محصول شماره ' . $i,
                'price' => $prices->random(),
                'image' => 'test.jpg',
                'stock' => 50,
                'description' => 'توضیحات'
            ]);
        }
    }
}
