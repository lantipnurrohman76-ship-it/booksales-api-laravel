<?php

namespace App\Models;

<<<<<<< HEAD
class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Tere Liye'],
            ['id' => 2, 'name' => 'Andrea Hirata'],
            ['id' => 3, 'name' => 'Dee Lestari'],
            ['id' => 4, 'name' => 'Habiburrahman El Shirazy'],
            ['id' => 5, 'name' => 'Ahmad Fuadi'],
        ];
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function books()
    {
        return $this->hasMany(Book::class);
>>>>>>> 746499d (Tugas 2 Laravel)
    }
}
