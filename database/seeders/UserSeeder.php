<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $faker = Faker::create('id_ID'); // Use Indonesian locale

    // Create admin user
    $admin = User::create([
      'name' => 'Muhammad Ghifari',
      'nisn' => '065123020',
      'password' => Hash::make('12345678'),
      'role' => 'a',
    ]);
    
    // Create one specific user
    $user = User::create([
      'name' => 'Ajiel',
      'nisn' => '065123021',
      'password' => Hash::make('87654321'),
      'role' => 'm',
    ]);

    // Create additional fake users
    for ($i = 0; $i < 50; $i++) {
      User::create([
        'name' => $faker->name(),
        'nisn' => $faker->unique()->numerify('065######'),
        'password' => Hash::make('password123'), // Default password for all fake users
        'role' => 'm', // All fake users are members
      ]);
    }
  }
}
