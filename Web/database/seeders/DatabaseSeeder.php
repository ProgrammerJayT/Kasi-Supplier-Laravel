<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bank;
use App\Models\Banking;
use App\Models\Category;
use App\Models\BankAccountType;
use App\Models\Warehouse;
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


        //Seed item categories
        $categories = [
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

        //Seed bank account types
        $accountTypes = [
            [
                'name' => 'Savings',
                'value' => 'savings',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cheque',
                'value' => 'cheque',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Current',
                'value' => 'current',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        //Seed banks
        $banks = [
            [
                'name' => 'Standard Bank',
                'value' => 'standard',
                'image' => 'images/banks/standard.png',
                'branch_code' => '051001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'First National Bank',
                'value' => 'fnb',
                'image' => 'images/banks/fnb.jpg',
                'branch_code' => '250655',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Capitec Bank',
                'value' => 'capitec',
                'image' => 'images/banks/capitec.jpg',
                'branch_code' => '470010',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nedbank',
                'value' => 'nedbank',
                'image' => 'images/banks/nedbank.jpg',
                'branch_code' => '198765',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tyme Bank',
                'value' => 'tyme',
                'image' => 'images/banks/tyme.jpg',
                'branch_code' => '198765',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ABSA Bank',
                'value' => 'absa',
                'image' => 'images/banks/absa.jpg',
                'branch_code' => '632005',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        $warehouse = [
            'address' => 'Magwa &, Lone Creek Cres, Waterval City, Midrand, 1686',
            'latlng' => '-26.0148388,28.1049169',
            'created_at' => now(),
            'updated_at' => now(),
        ];


        Warehouse::insert($warehouse);
        Bank::insert($banks);
        BankAccountType::insert($accountTypes);
        Category::insert($categories);
    }
}
