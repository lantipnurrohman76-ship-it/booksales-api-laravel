<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = [
            ['id' => 1, 'name' => 'Andrea Hirata', 'country' => 'Indonesia', 'books_written' => 10],
            ['id' => 2, 'name' => 'J.K. Rowling', 'country' => 'Inggris', 'books_written' => 7],
            ['id' => 3, 'name' => 'Tere Liye', 'country' => 'Indonesia', 'books_written' => 15],
            ['id' => 4, 'name' => 'Agatha Christie', 'country' => 'Inggris', 'books_written' => 66],
            ['id' => 5, 'name' => 'Haruki Murakami', 'country' => 'Jepang', 'books_written' => 14],
        ];

        return view('author', compact('authors'));
    }
}
