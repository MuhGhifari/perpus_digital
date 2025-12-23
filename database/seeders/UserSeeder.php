<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $admin = User::create([
      'name' => 'Muhammad Ghifari',
      'nisn' => '065123020',
      'password' => Hash::make('12345678'),
      'role' => 'a',
    ]);
    
    $user = User::create([
      'name' => 'Ajiel',
      'nisn' => '065123021',
      'password' => Hash::make('87654321'),
    ]);
  }
}
