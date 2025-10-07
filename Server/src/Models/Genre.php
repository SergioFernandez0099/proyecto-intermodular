<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['name', 'registration_date'];
    public $timestamps = false;

    // Relación con libros
    public function books()
    {
        return $this->hasMany(Book::class, 'idGende');
    }
}
