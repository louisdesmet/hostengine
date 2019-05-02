<?php

use Illuminate\Database\Seeder;

use App\Category;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        Category::insert([
            ['name' => 'Microsoft Cloud', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Storage & Backup', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Security', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'VOIP', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cloud Server / VPS', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Domains & Web', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tools', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Service', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Training', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
