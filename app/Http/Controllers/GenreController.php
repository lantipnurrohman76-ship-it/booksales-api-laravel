<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = ['Fiksi', 'Non-Fiksi', 'Fantasi', 'Romantis', 'Misteri', 'Sejarah'];
        return view('genre', ['genres' => $genres]);
    }
}
