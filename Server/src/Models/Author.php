<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = ['name', 'registration_date'];
    public $timestamps = false; // porque ya tienes timestamp manual

    // Relación con libros
    public function books()
    {
        return $this->hasMany(Book::class, 'idAuthor');
    }
}
