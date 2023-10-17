<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Souvenirs',
            'status' => 'active',
        ]);
        DB::table('categories')->insert([
            'name' => 'Gifts',
            'status' => 'active',
        ]);
        DB::table('categories')->insert([
            'name' => 'Foods',
            'status' => 'active',
        ]);
    }
}
