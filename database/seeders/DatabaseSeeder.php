<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductsSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                CategorySeeder::class,
                ProductsSeeder::class
            ]
        );

        DB::table('users')->insert([
            'avatar' => "products/pin.jpg",
            'name' => "Admin ganteng terbaik tiada banding sipaling hemat rajin menabung dan tidak sombong",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
        ]);
    }
}
