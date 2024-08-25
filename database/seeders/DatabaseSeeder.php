<?php

namespace Database\Seeders;

use App\Models\Category;
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
         User::factory()->create([
            'email' => 'raciel@app.com',
            'password'=>bcrypt("12345678"),
         ]);

         User::factory(9)->create();
         Category::factory(10)
         ->hasThreads(20)
         ->create();

        
    }
}
