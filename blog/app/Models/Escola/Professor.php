<?php

namespace App\Models\Escola;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{

    protected $professors = 'professors';

    protected $fillable = array('nome','graduacao', 'especialidade', 'turma_id');

    public function BuscarTurma()
    {
        return $this->belongsTo(Turma::class);
    }
}
