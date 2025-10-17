<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan semua seeder database.
     */
    public function run(): void
    {
        // Jalankan seeder karakter One Piece
        $this->call(CharacterSeeder::class);
    }
}
