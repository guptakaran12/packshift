<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotationStatuseSeeder extends Seeder
{

    public function run(): void
    {
        $statuses = [
            'Draft',
            'Sent',
            'Accepted',
            'Rejected',
            'Expired',
        ];

        foreach ($statuses as $name) {
            DB::table('quotation_statuses')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
