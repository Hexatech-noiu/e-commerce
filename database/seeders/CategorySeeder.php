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
            'name' => 'Ganci',
            'status' => 'active',
        ]);
        DB::table('categories')->insert([
            'name' => 'Tumbler',
            'status' => 'active',
        ]);
        DB::table('categories')->insert([
            'name' => 'Totebag',
            'status' => 'active',
        ]);
        DB::table('categories')->insert([
            'name' => 'Mug',
            'status' => 'active',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kaos',
            'status' => 'active',
        ]);
        DB::table('categories')->insert([
            'name' => 'Pin',
            'status' => 'active',
        ]);
    }
}
