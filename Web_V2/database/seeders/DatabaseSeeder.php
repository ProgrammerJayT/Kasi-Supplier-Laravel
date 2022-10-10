<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $data = [
            [
                'name' => 'Baby & Toddler',
                'value' => 'baby',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beauty',
                'value' => 'beauty',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Books',
                'value' => 'books',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electronics',
                'value' => 'electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Camping & Outdoors',
                'value' => 'camping',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cell Phones',
                'value' => 'phones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fashion',
                'value' => 'fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Food & Beverages',
                'value' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Entertainment',
                'value' => 'entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Office & School Supplies',
                'value' => 'stationery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pets',
                'value' => 'pets',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Health & Fitness',
                'value' => 'health',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home & Kitchen',
                'value' => 'household',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luggage & Travel Gear',
                'value' => 'travel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Garden & Pool',
                'value' => 'garden',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Category::insert($data);
    }
}
