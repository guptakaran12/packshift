<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypesSeeder extends Seeder
{
    public function run(): void
    {
        $vehicleTypes = [
            'Bike',
            'Scooter',
            'Hatchback Car',
            'Sedan Car',
            'SUV',
            'Tempo (3-Wheeler)',
            'Tata Ace / Chhota Hathi',
            'Pickup Truck',
            '14-feet Truck',
            '17-feet Truck',
            'Containerized Truck',
            'Trailer Truck',
            'Other',
        ];

        foreach ($vehicleTypes as $name) {
            DB::table('vehicle_types')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
