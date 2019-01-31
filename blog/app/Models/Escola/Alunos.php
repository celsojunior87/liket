<?php

namespace App\Models\Escola;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $alunos = 'alunos';

    protected $fillable = array('nome','idade', 'email', 'serie');


}
