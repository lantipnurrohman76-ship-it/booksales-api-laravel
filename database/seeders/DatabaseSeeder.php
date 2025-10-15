<?php

namespace Database\Seeders;

<<<<<<< HEAD
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
        // User::factory(10)->create();

=======
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seeder dijalankan berurutan
        $this->call([
            CategorySeeder::class,
            AuthorSeeder::class,
            BookSeeder::class,
        ]);

        
>>>>>>> 746499d (Tugas 2 Laravel)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
<<<<<<< HEAD
=======

>>>>>>> 746499d (Tugas 2 Laravel)
