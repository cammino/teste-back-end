<?php

use Illuminate\Database\Seeder;

class TierPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tier_prices')->insert([
            "qty"=> 10, "price"=> 60.85, "product_id" => 1
        ]);

        DB::table('tier_prices')->insert([
            "qty"=> 5, "price"=> 65.90, "product_id" => 1
        ]);

        DB::table('tier_prices')->insert([
            "qty"=> 3, "price"=> 70.25, "product_id" => 1
        ]);

        DB::table('tier_prices')->insert([
            "qty"=> 8, "price"=> 58.20, "product_id" => 2
        ]);

        DB::table('tier_prices')->insert([
            "qty"=> 2, "price"=> 65.90 , "product_id" => 2
        ]);

        DB::table('tier_prices')->insert([
            "qty"=> 5, "price"=> 70.25 , "product_id" => 2
        ]);

        DB::table('tier_prices')->insert([
            "qty"=> 7, "price"=> 70.25 , "product_id" => 3
        ]);

        DB::table('tier_prices')->insert([
            "qty"=> 4, "price"=> 65.90, "product_id" => 3
        ]);

        DB::table('tier_prices')->insert([
            "qty"=> 12, "price"=> 59.90 , "product_id" => 3
        ]);
    }
}
