<?php

use Illuminate\Database\Seeder;

use App\Price;
use Carbon\Carbon;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        Price::insert([
            //Office 365 unmanaged
            ['product_option_id' => 1, 'level' => 1, 'price' => '3.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'level' => 2, 'price' => '2.88', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'level' => 3, 'price' => '2.88', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'level' => 4, 'price' => '2.83', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 2, 'level' => 1, 'price' => '6.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'level' => 2, 'price' => '5.76', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'level' => 3, 'price' => '5.76', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'level' => 4, 'price' => '5.70', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 3, 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'level' => 2, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'level' => 3, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'level' => 4, 'price' => '3.52', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 4, 'level' => 1, 'price' => '8.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'level' => 2, 'price' => '7.49', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'level' => 3, 'price' => '7.49', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'level' => 4, 'price' => '7.42', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 5, 'level' => 1, 'price' => '10.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'level' => 2, 'price' => '8.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'level' => 3, 'price' => '8.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'level' => 4, 'price' => '8.79', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 6, 'level' => 1, 'price' => '6.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'level' => 2, 'price' => '5.75', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'level' => 3, 'price' => '5.75', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'level' => 4, 'price' => '5.70', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 7, 'level' => 1, 'price' => '19.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'level' => 2, 'price' => '16.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'level' => 3, 'price' => '16.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'level' => 4, 'price' => '16.55', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 8, 'level' => 1, 'price' => '12.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'level' => 2, 'price' => '10.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'level' => 3, 'price' => '10.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'level' => 4, 'price' => '10.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 9, 'level' => 1, 'price' => '16.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'level' => 2, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'level' => 3, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'level' => 4, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 10, 'level' => 1, 'price' => '31.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'level' => 2, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'level' => 3, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'level' => 4, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 11, 'level' => 1, 'price' => '58.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'level' => 2, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'level' => 3, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'level' => 4, 'price' => '51.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 12, 'level' => 1, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'level' => 2, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'level' => 3, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'level' => 4, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 13, 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'level' => 2, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'level' => 3, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'level' => 4, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 14, 'level' => 1, 'price' => '4.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'level' => 2, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'level' => 3, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'level' => 4, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 15, 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'level' => 2, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'level' => 3, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'level' => 4, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 16, 'level' => 1, 'price' => '8.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'level' => 2, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'level' => 3, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'level' => 4, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 17, 'level' => 1, 'price' => '25.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'level' => 2, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'level' => 3, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'level' => 4, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 18, 'level' => 1, 'price' => '5.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'level' => 2, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'level' => 3, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'level' => 4, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 19, 'level' => 1, 'price' => '46.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'level' => 2, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'level' => 3, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'level' => 4, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 20, 'level' => 1, 'price' => '1.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'level' => 2, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'level' => 3, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'level' => 4, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 21, 'level' => 1, 'price' => '4.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'level' => 2, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'level' => 3, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'level' => 4, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],




            //office 365 managed
            ['product_option_id' => 22, 'level' => 1, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'level' => 2, 'price' => '3.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'level' => 3, 'price' => '3.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'level' => 4, 'price' => '3.70', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 23, 'level' => 1, 'price' => '7.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'level' => 2, 'price' => '6.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'level' => 3, 'price' => '6.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'level' => 4, 'price' => '6.50', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 24, 'level' => 1, 'price' => '5.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'level' => 2, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'level' => 3, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'level' => 4, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 25, 'level' => 1, 'price' => '8.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'level' => 2, 'price' => '7.92', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'level' => 3, 'price' => '7.92', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'level' => 4, 'price' => '7.92', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 26, 'level' => 1, 'price' => '12.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'level' => 2, 'price' => '10.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'level' => 3, 'price' => '10.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'level' => 4, 'price' => '10.50', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 27, 'level' => 1, 'price' => '8.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'level' => 2, 'price' => '6.75', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'level' => 3, 'price' => '6.75', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'level' => 4, 'price' => '6.75', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 28, 'level' => 1, 'price' => '21.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'level' => 2, 'price' => '17.73', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'level' => 3, 'price' => '17.73', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'level' => 4, 'price' => '17.73', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 29, 'level' => 1, 'price' => '14.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'level' => 2, 'price' => '12.33', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'level' => 3, 'price' => '12.33', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'level' => 4, 'price' => '12.33', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 30, 'level' => 1, 'price' => '16.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'level' => 2, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'level' => 3, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'level' => 4, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 31, 'level' => 1, 'price' => '31.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'level' => 2, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'level' => 3, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'level' => 4, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 32, 'level' => 1, 'price' => '58.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'level' => 2, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'level' => 3, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'level' => 4, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 33, 'level' => 1, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'level' => 2, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'level' => 3, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'level' => 4, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 34, 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'level' => 2, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'level' => 3, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'level' => 4, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 35, 'level' => 1, 'price' => '12.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'level' => 2, 'price' => '10.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'level' => 3, 'price' => '10.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'level' => 4, 'price' => '10.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 36, 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'level' => 2, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'level' => 3, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'level' => 4, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 37, 'level' => 1, 'price' => '8.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'level' => 2, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'level' => 3, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'level' => 4, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 38, 'level' => 1, 'price' => '25.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'level' => 2, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'level' => 3, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'level' => 4, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 39, 'level' => 1, 'price' => '5.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'level' => 2, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'level' => 3, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'level' => 4, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 40, 'level' => 1, 'price' => '46.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'level' => 2, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'level' => 3, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'level' => 4, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 41, 'level' => 1, 'price' => '1.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'level' => 2, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'level' => 3, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'level' => 4, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 42, 'level' => 1, 'price' => '4.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'level' => 2, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'level' => 3, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'level' => 4, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],

            //microsoft 365

            ['product_option_id' => 43, 'level' => 1, 'price' => '16.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'level' => 2, 'price' => '14.49', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'level' => 3, 'price' => '14.49', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'level' => 4, 'price' => '14.49', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 44, 'level' => 1, 'price' => '31.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'level' => 2, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'level' => 3, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'level' => 4, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 45, 'level' => 1, 'price' => '58.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'level' => 2, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'level' => 3, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'level' => 4, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}
