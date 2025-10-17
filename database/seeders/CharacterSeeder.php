<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     */
    public function run(): void
    {
        Character::create([
            'name' => 'Monkey D. Luffy',
            'crew' => 'Straw Hat Pirates',
            'fruit' => 'Gomu Gomu no Mi',
            'bounty' => 3000000000,
        ]);

        Character::create([
            'name' => 'Roronoa Zoro',
            'crew' => 'Straw Hat Pirates',
            'fruit' => '-',
            'bounty' => 1200000000,
        ]);

        Character::create([
            'name' => 'Vinsmoke Sanji',
            'crew' => 'Straw Hat Pirates',
            'fruit' => '-',
            'bounty' => 1032000000,
        ]);
    }
}
