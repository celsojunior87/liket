<?php

namespace App\Http\Controllers\Escola;

use App\Models\Escola\Alunos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Escola\Turma;

class TurmaController extends Controller
{
    private $turma;

    public function __construct( Turma $turma)
    {
        $this->turma = $turma;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Listagem de Turmas';
        $turma = Turma::all();

        return view('turma.index',compact('turma','title'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Nova Turma';
        $turma = Turma::all();
        $alunos = Alunos::all();
        return view('turma.create', compact('turma','alunos','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
         $data = $request->except('_token');
         $insert = $this->turma->insert($data);

//         $this->validate($request,$this->turma->rules);

         if($insert)
             return redirect()->route('turma.index');
         else
             return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Editar Turmas';
        $alunos = Alunos::all();
        $turma = $this->turma->find($id);
        return view('turma.edit', compact('turma','alunos','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'editando{$id}';
    }

    /**
     * @param $id
     */
    public function destroy(Turma $turma,$id)
    {
        $turma = $this->turma->find($id);
        return view('turma.index', compact('turma','id'));

    }
}
