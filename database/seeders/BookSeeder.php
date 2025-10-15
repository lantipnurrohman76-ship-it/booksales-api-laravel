<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $authors = Author::all();

        if ($authors->count() < 5) {
            echo "Error: Pastikan AuthorSeeder sudah menambahkan 5 author.\n";
            return;
        }

        Book::insert([
            ['title' => 'Harry Potter', 'author_id' => $authors[0]->id, 'year' => 1997],
            ['title' => 'Game of Thrones', 'author_id' => $authors[1]->id, 'year' => 1996],
            ['title' => 'Murder on the Orient Express', 'author_id' => $authors[2]->id, 'year' => 1934],
            ['title' => 'The Da Vinci Code', 'author_id' => $authors[3]->id, 'year' => 2003],
            ['title' => 'The Shining', 'author_id' => $authors[4]->id, 'year' => 1977],
        ]);
    }
}
