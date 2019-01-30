<?php

namespace App\Http\Controllers\Escola;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Escola\Alunos;

class AlunosController extends Controller
{

    private $alunos;

    public function __construct( Alunos $alunos)
    {
        $this->alunos = $alunos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Listagem de Alunos';
        $aluno = Alunos::all();

        return view('alunos.index',compact('aluno','title'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Nova Aluno';
        $aluno = Alunos::all();
        return view('alunos.create', compact('aluno','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $data = $request->except('_token');
        $insert = $this->alunos->insert($data);

        if($insert)
            return redirect()->route('alunos.index');

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
        $alunos = Alunos::find($id);
        return view('alunos.edit', compact('alunos'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $alunos = Alunos::find($id);

        $alunos->nome  = $request->get('nome');
        $alunos->idade = $request->get('idade');
        $alunos->email = $request->get('email');
        $alunos->serie = $request->get('serie');


        $alunos->save();

        return redirect('alunos')->with('success', 'Informação editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
