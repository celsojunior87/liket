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
        $alunos = Alunos::find($id);
        return view('alunos.show',compact('alunos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Editar Alunos';
        $alunos = $this->alunos->find($id);
        return view('alunos.edit', compact('alunos','title'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $alunos = Alunos::find($id);

        $update = $alunos->update($data);

        if($update)
            return redirect()->route('alunos.index');
        else
            return redirect()->route('alunos.edit',$id)->with(['erros ' => 'falha ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alunos = Alunos::find($id);
        $delete = $alunos->delete();
        if($delete)
            return redirect()->route('alunos.index');
        else
            return redirect()->route('alunos.show',$id)->with(['erros'=>'falha ao excluir']);

    }
}
