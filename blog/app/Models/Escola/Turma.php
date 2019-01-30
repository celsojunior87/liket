<?php

namespace App\Models\Escola;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{

    protected $turmas = 'turma';

    public function BuscarAluno()
    {
        return $this->belongsTo(Alunos::class);
    }

//    public  $rules = [
//        'nome'=> 'required'|'min:3'|'max:120',
//        'turno'=> 'required',
//        'disciplina'=> 'required',
//
//        ];
}
