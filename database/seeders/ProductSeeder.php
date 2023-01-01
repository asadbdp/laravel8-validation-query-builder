<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'product 1',
                'sku' => 'p120',
                'qty' => 5,
                'price' => 1320,
            ],
            [
                'name' => 'product 2',
                'sku' => 'p121',
                'qty' => 4,
                'price' => 12500,
            ],
            [
                'name' => 'product 3',
                'sku' => 'p122',
                'qty' => 3,
                'price' => 1020,
            ],
            [
                'name' => 'product 4',
                'sku' => 'p123',
                'qty' => 2,
                'price' => 120,
            ],
            [
                'name' => 'product 5',
                'sku' => 'p124',
                'qty' => 1,
                'price' => 10020,
            ],

        ]);
    }
}
