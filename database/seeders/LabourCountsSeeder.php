<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabourCountsSeeder extends Seeder
{
    public function run(): void
    {
        $labourCounts = [
            '1 Labour',
            '2 Labours',
            '3 Labours',
            '4 Labours',
            '5 Labours',
            '6+ Labours',
        ];

        foreach ($labourCounts as $name) {
            DB::table('labour_counts')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
