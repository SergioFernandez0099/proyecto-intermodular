<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['title', 'idGende', 'idAuthor', 'registration_date', 'publication_year'];
    public $timestamps = false;

    // Relaciones
    public function author()
    {
        return $this->belongsTo(Author::class, 'idAuthor');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'idGende');
    }
}
