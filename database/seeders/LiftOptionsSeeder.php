<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiftOptionsSeeder extends Seeder
{
    public function run(): void
    {
        $options = [
            'Yes (Lift Available)',
            'No (Lift Not Available)',
        ];

        foreach ($options as $name) {
            DB::table('lift_options')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
