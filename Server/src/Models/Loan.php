<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loans';

    protected $fillable = [
        'idUser',
        'idCopie',
        'loan_date',
        'return_date',
    ];

    // Relación: un préstamo pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    // Relación: un préstamo pertenece a un ejemplar
    public function ejemplar()
    {
        return $this->belongsTo(Copie::class, 'idCopie');
    }
}
