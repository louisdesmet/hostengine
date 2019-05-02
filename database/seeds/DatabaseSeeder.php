<?php

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
        $this->call(BrandsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(ProductKeysTableSeeder::class);
        $this->call(ProductOptionsTableSeeder::class);
        $this->call(PricesTableSeeder::class);

    }
}
