<?php

use Illuminate\Database\Seeder;

use App\ProductOption;
use Carbon\Carbon;

class ProductOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        ProductOption::insert([
            ['product_id' => 7, 'name' => 'Exchange Online', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Exchange Online Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Office 365 Business Essentials', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Office 365 Business', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Office 365 Business Premium', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Office 365 - E1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Office 365 - E3', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Office 365 Pro Plus', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Microsoft 365 Business', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Microsoft 365 - E3', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Microsoft 365 - E5', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Intune', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Visio Online Plan 1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Visio Online Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'One Drive Business Plan 1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'One Drive Business Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Project Online Professional', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Project Online Essentials', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Project Online Premium', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Skype for Business Plan 1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 7, 'name' => 'Skype for Business Plan 2', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 8, 'name' => 'Exchange Online', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Exchange Online Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Office 365 Business Essentials', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Office 365 Business', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Office 365 Business Premium', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Office 365 - E1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Office 365 - E3', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Office 365 Pro Plus', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Microsoft 365 Business', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Microsoft 365 - E3', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Microsoft 365 - E5', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Intune', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Visio Online Plan 1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Visio Online Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'One Drive Business Plan 1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'One Drive Business Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Project Online Professional', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Project Online Essentials', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Project Online Premium', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Skype for Business Plan 1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 8, 'name' => 'Skype for Business Plan 2', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 9, 'name' => 'Microsoft 365 Business', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 9, 'name' => 'Microsoft 365 - E3', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 9, 'name' => 'Microsoft 365 - E5', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 11, 'name' => 'Skype for Business Plan 1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Skype for Business Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Exchange Online', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Exchange Online Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Office 365 Business Essentials', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Office 365 Business', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Office 365 Business Premium', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Office 365 - E1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Office 365 - E3', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Office 365 Pro Plus', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Microsoft 365 Business', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Microsoft 365 - E3', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Microsoft 365 - E5', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Intune', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Visio Online Plan 1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Visio Online Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'One Drive Business Plan 1', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'One Drive Business Plan 2', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Project Online Professional', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Project Online Essentials', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'name' => 'Project Online Premium', 'created_at' => $now, 'updated_at' => $now],


        ]);
    }
}
