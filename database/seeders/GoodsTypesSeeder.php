<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsTypesSeeder extends Seeder
{
    public function run(): void
    {
        $goodsTypes = [
            'Household Goods',
            'Office Items',
            'Electronics & Appliances',
            'Industrial Equipment',
            'Documents / Files',
            'Vehicle (Car / Bike)',
            'Fragile Items',
            'Furniture Only',
            'Mixed Items',
            'Other',
        ];

        foreach ($goodsTypes as $name) {
            DB::table('goods_types')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
