<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Location Data    
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,

            // Master Dropdowns
            ClientTypesSeeder::class,
            QuotationStatusesSeeder::class,
            ServiceTypesSeeder::class,
            GoodsTypesSeeder::class,
            MoveTypesSeeder::class,
            VehicleTypesSeeder::class,
            PickupFloorsSeeder::class,
            LiftOptionsSeeder::class,
            LabourCountsSeeder::class,
            InsuranceOptionsSeeder::class,
        ]);
    }
}
