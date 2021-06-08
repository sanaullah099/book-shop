<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \App\Models\Customer::factory()->count(10)->create();
    }
}
