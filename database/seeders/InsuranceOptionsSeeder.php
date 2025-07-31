<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsuranceOptionsSeeder extends Seeder
{
    public function run(): void
    {
        $options = [
            'Yes - Full Coverage',
            'Yes - Partial Coverage',
            'No',
        ];

        foreach ($options as $name) {
            DB::table('insurance_options')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
