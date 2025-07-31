<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoveTypesSeeder extends Seeder
{

    public function run(): void
    {
        $moveTypes = [
            'Home Relocation',
            'Office Shifting',
            'Commercial Move',
            'Vehicle Transport',
            'Warehouse Move',
            'Furniture Moving Only',
            'Local Move',
            'Intercity / Long Distance',
            'International Move',
            'Other',
        ];

        foreach ($moveTypes as $name) {
            DB::table('move_types')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
