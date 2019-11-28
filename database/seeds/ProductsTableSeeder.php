<?php

use App\Product;
use App\ProductTierPrices;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'PHP for experts',
                'regular_price' => 50.90,
                'special_price' => 45.90,
                'special_price_from' => '2019-01-01',
                'special_price_to' => '2019-01-31'
            ],
            [
                'name' => 'TDD using PHP',
                'regular_price' => 80.95,
                'special_price' => 75.90,
                'special_price_from' => '2019-01-01',
                'special_price_to' => '2019-01-31'
            ],
            [
                'name' => 'Learning Magento',
                'regular_price' => 80.95,
                'special_price' => 75.90,
                'special_price_from' => '2019-01-01',
                'special_price_to' => '2019-01-31'
            ]
        ];
        $tierPrices = [
            ['product_id' => 1, 'qty' => 3, 'price' => 40.95],
            ['product_id' => 1, 'qty' => 5, 'price' => 35.89],
            ['product_id' => 1, 'qty' => 10, 'price' => 30.25],
            ['product_id' => 2, 'qty' => 3, 'price' => 70.25],
            ['product_id' => 2, 'qty' => 5, 'price' => 65.90],
            ['product_id' => 2, 'qty' => 10, 'price' => 60.85],
            ['product_id' => 3, 'qty' => 3, 'price' => 70.25],
            ['product_id' => 3, 'qty' => 5, 'price' => 65.90],
            ['product_id' => 3, 'qty' => 10, 'price' => 60.85]
        ];
        DB::table('products')->insert($products);
        DB::table('product_tier_prices')->insert($tierPrices);
    }
}
