<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            'id' => 1,
            'name' => 'India',
            'country_code' => '+91',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
