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
            ClientTypesTableSeeder::class,
            QuotationStatusesTableSeeder::class,
            ServiceTypesTableSeeder::class,
            GoodsTypesTableSeeder::class,
            MoveTypesTableSeeder::class,
            VehicleTypesTableSeeder::class,
            PickupFloorsTableSeeder::class,
            LiftOptionsTableSeeder::class,
            LabourCountsTableSeeder::class,
            InsuranceOptionsTableSeeder::class,
        ]);
    }
}
