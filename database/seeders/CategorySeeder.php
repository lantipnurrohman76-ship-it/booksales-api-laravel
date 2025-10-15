<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            ['name' => 'Novel'],
            ['name' => 'Komik'],
            ['name' => 'Ilmu Pengetahuan'],
            ['name' => 'Teknologi'],
            ['name' => 'Sejarah'],
        ]);
    }
}
