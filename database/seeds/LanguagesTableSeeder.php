<?php

use Illuminate\Database\Seeder;

use App\Language;
use Carbon\Carbon;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        Language::insert([
            ['name' => 'Dutch', 'code' => 'BE', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'French', 'code' => 'FR', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
