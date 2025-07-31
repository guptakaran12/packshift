<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTypesSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            'Local Home Shifting',
            'Intercity Home Shifting',
            'Office Relocation',
            'Vehicle Transport',
            'Warehouse Relocation',
            'International Move',
            'Storage / Warehousing',
            'Pet Relocation',
            'AC Uninstall / Install Only',
            'Packing Only Service',
            'Unpacking Only Service',
            'Other',
        ];

        foreach ($services as $name) {
            DB::table('service_types')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
