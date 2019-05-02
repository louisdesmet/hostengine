<?php

use Illuminate\Database\Seeder;

use App\Brand;
use Carbon\Carbon;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        Brand::insert([
            ['name' => 'Cloudhighway', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Belnet', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cloudstar', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nomeo', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Starring Jane', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
