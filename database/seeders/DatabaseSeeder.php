<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Inbox;
use App\Models\Booking;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Package_category;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    $this->call([
      CategorySeeder::class,
      ProductSeeder::class,
      UserSeeder::class,
    ]);
    Inbox::factory(25)->create();
    Order::factory(10)->create();
  }
}
