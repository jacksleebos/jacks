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
                ['productName' => 'uitlaat Alfa Romeo 2.0',
                 'productCategory' => 1,
                 'productDescription' => 'super loud',
                 'productPrice' => 250.00,
                 'productImage' => 'href',
                ],

                ['productName' => 'dashboard Alfa Romeo 2.0',
                 'productCategory' => 2,
                 'productDescription' => 'blue light',
                 'productPrice' => 395.00,
                 'productImage' => 'href',
                ],

                ['productName' => 'stuurwiel Alfa Romeo',
                 'productCategory' => 3,
                 'productDescription' => 'met bruin leder',
                 'productPrice' => 505.00,
                 'productImage' => 'href',
                ]

            ]);  //
    }
}
