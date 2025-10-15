<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::insert([
            ['name'=>'J.K. Rowling','email'=>'jkrowling@example.com'],
            ['name'=>'George R.R. Martin','email'=>'grrm@example.com'],
            ['name'=>'Agatha Christie','email'=>'achristie@example.com'],
            ['name'=>'Dan Brown','email'=>'dbrown@example.com'],
            ['name'=>'Stephen King','email'=>'sking@example.com'],
        ]);
    }
}
