<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class publisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('publishers')->truncate();
        \App\Models\Publisher::factory()->count(10)->create();
    }
}
