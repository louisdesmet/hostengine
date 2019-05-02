<?php

use Illuminate\Database\Seeder;

use App\Vendor;
use Carbon\Carbon;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        Vendor::insert([
            ['name' => 'Microsoft', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Acronis', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'SkyHi', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nomadesk', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bullguard', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'GData', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Comodo', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Thawte', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cloudhighway', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Flexishop', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'N-able', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hyperdesk', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
