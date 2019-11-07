<?php

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
        DB::table('products')->insert(
            [
                'name' => 'PHP for experts',
                'regular_price' => 50.90,
                'special_price' => 45.90,
                'special_price_from' => '2019-01-01',
                'special_price_to' => '2019-01-31'
            ]
        );

        DB::table('products')->insert(
            [
                "id"=> 2,
                "name"=> "TDD using PHP",
                "regular_price"=> 80.95,
                "special_price"=> 75.90,
                "special_price_from"=> "2019-01-01",
                "special_price_to"=> "2019-01-31",
            ]
        );

        DB::table('products')->insert(

            [
                "id"=> 3,
                "name"=> "Learning Magento",
                "regular_price"=> 80.95,
                "special_price"=> 58.90,
                "special_price_from"=> "2019-01-01",
                "special_price_to"=> "2019-01-31",
            ]
        );
    }
}
