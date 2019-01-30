<?php

namespace App\Http\Controllers\Escola;

use App\Models\Escola\Professor;
use App\Models\Escola\Turma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessoresController extends Controller
{
    private $professor;

    public function __construct( Professor $professor)
    {
        $this->professor = $professor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = 'Listagem de Professores';
         $professor = Professor::all();


        return view('professor.index',compact('professor','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar novo Professor';
        $professor = Professor::all();
        $turma = Turma::all();
        return view('professor.create', compact('professor','turma','title'));
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
        $insert = $this->professor->insert($data);

//         $this->validate($request,$this->turma->rules);
        if($insert)
            return redirect()->route('professor.index');

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
        //
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
        //
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
