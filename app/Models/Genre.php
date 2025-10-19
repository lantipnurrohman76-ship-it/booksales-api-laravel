<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi lewat mass assignment
    protected $fillable = ['name'];
}
