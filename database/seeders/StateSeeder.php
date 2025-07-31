<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['id' => 1, 'name' => 'Andhra Pradesh (AP)', 'country_id' => 1],
            ['id' => 2, 'name' => 'Arunachal Pradesh (AR)', 'country_id' => 1],
            ['id' => 3, 'name' => 'Assam (AS)', 'country_id' => 1],
            ['id' => 4, 'name' => 'Bihar (BR)', 'country_id' => 1],
            ['id' => 5, 'name' => 'Chhattisgarh (CG)', 'country_id' => 1],
            ['id' => 6, 'name' => 'Dadra and Nagar Haveli (DN)', 'country_id' => 1],
            ['id' => 7, 'name' => 'Daman and Diu (DD)', 'country_id' => 1],
            ['id' => 8, 'name' => 'Delhi (DL)', 'country_id' => 1],
            ['id' => 9, 'name' => 'Goa (GA)', 'country_id' => 1],
            ['id' => 10, 'name' => 'Gujarat (GJ)', 'country_id' => 1],
            ['id' => 11, 'name' => 'Haryana (HR)', 'country_id' => 1],
            ['id' => 12, 'name' => 'Himachal Pradesh (HP)', 'country_id' => 1],
            ['id' => 13, 'name' => 'Jammu and Kashmir (JK)', 'country_id' => 1],
            ['id' => 14, 'name' => 'Jharkhand (JH)', 'country_id' => 1],
            ['id' => 15, 'name' => 'Karnataka (KA)', 'country_id' => 1],
            ['id' => 16, 'name' => 'Kerala (KL)', 'country_id' => 1],
            ['id' => 17, 'name' => 'Ladakh (LA)', 'country_id' => 1],
            ['id' => 18, 'name' => 'Lakshadweep (LD)', 'country_id' => 1],
            ['id' => 19, 'name' => 'Madhya Pradesh (MP)', 'country_id' => 1],
            ['id' => 20, 'name' => 'Maharashtra (MH)', 'country_id' => 1],
            ['id' => 21, 'name' => 'Manipur (MN)', 'country_id' => 1],
            ['id' => 22, 'name' => 'Meghalaya (ML)', 'country_id' => 1],
            ['id' => 23, 'name' => 'Mizoram (MZ)', 'country_id' => 1],
            ['id' => 24, 'name' => 'Nagaland (NL)', 'country_id' => 1],
            ['id' => 25, 'name' => 'Odisha (OR)', 'country_id' => 1],
            ['id' => 26, 'name' => 'Puducherry (PY)', 'country_id' => 1],
            ['id' => 27, 'name' => 'Punjab (PB)', 'country_id' => 1],
            ['id' => 28, 'name' => 'Rajasthan (RJ)', 'country_id' => 1],
            ['id' => 29, 'name' => 'Sikkim (SK)', 'country_id' => 1],
            ['id' => 30, 'name' => 'Tamil Nadu (TN)', 'country_id' => 1],
            ['id' => 31, 'name' => 'Telangana (TG)', 'country_id' => 1],
            ['id' => 32, 'name' => 'Tripura (TR)', 'country_id' => 1],
            ['id' => 33, 'name' => 'Uttar Pradesh (UP)', 'country_id' => 1],
            ['id' => 34, 'name' => 'Uttarakhand (UK)', 'country_id' => 1],
            ['id' => 35, 'name' => 'West Bengal (WB)', 'country_id' => 1],
        ];

        foreach ($states as $state) {
            DB::table('states')->insert([
                'id' => $state['id'],
                'name' => $state['name'],
                'country_id' => $state['country_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
