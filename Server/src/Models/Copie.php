<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Copie extends Model
{
    protected $table = 'copies';

    protected $fillable = [
        'id',
        'code',
        'estado',
    ];

    // Relación: un ejemplar pertenece a un libro
    public function libro()
    {
        return $this->belongsTo(Book::class, 'idBook');
    }

    // Relación: un ejemplar puede tener muchos préstamos
    public function prestamos()
    {
        return $this->hasMany(Loan::class, 'idCopie');
    }
}
