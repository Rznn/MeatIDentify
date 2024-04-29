<?php

namespace Database\Seeders;

use App\Models\Meat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1, 'name' => 'Horse Meat', 'description' => 'Kandungan Gizi Horse Meat'],
            ['id' => 2, 'name' => 'Meat', 'description' => 'Kandungan Gizi Meat'],
            ['id' => 3, 'name' => 'Pork', 'description' => 'Kandungan Gizi Pork'],
        ];

        foreach ($data as $value) {
            Meat::create($value);
        }
    }
}
