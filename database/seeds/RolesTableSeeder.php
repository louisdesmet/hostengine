<?php

use Illuminate\Database\Seeder;

use App\Role;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        Role::insert([
            ['name' => 'Administrator', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Manager', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
