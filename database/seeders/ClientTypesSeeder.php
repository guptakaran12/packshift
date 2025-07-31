<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTypesSeeder extends Seeder
{

    public function run(): void
    {
        $types = [
            'Individual',
            'Company',
            'Government',
            'NGO',
            'Builder / Real Estate',
            'Corporate Office',
            'Startup',
            'School / College',
            'Other',
        ];

        foreach ($types as $name) {
            DB::table('client_types')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
