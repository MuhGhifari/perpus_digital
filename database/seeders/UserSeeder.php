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
    // Create users from akun.demo
    User::create([
      'name' => 'MOCHAMMAD AINUL YAQIN',
      'npm' => '065123001',
      'password' => Hash::make('yaqinganteng'),
      'role' => 'm',
    ]);

    User::create([
      'name' => 'PUTRI FATIKHATUL JANNAH',
      'npm' => '065123002',
      'password' => Hash::make('putricantik'),
      'role' => 'm',
    ]);

    User::create([
      'name' => 'admin123',
      'npm' => '065123003',
      'password' => Hash::make('adminadmin'),
      'role' => 'a',
    ]);

    User::create([
      'name' => 'KENOLA',
      'npm' => '065123004',
      'password' => Hash::make('kenolajelek'),
      'role' => 'm',
    ]);
  }
}
