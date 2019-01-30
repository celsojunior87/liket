<?php

namespace App\Models\Escola;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{

    protected $professors = 'professors';


    public function BuscarTurma()
    {
        return $this->belongsTo(Turma::class);
    }
}
