<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BookSeeder::class);

        // for ($i = 0; $i < 35; $i++) {
        //     $this->call(BookSeeder::class);
        // }

        
    }
}
