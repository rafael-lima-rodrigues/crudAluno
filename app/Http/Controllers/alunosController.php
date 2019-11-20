<?php

namespace App\Http\Controllers;

use App\Alunos;
use Illuminate\Http\Request;
use Illuminate\View\View;

class alunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Alunos::orderby('id')->get();
        return view('alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'disciplina' => 'required',
            'data_matricula' => 'required',
            'nota' => 'required|numeric']);
        
            
         Alunos::create($request->all());

        return redirect()->route('alunos.index')
                        ->with('success', 'Aluno Matriculado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alunos = Alunos::findOrFail($id);
    return view('alunos.show', compact('alunos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $alunos = Alunos::findOrFail($id);
       return view('alunos.edit', compact('alunos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $aluno = Alunos::findOrFail($id);

        $aluno->nome = request('nome');
        $aluno->disciplina = request('disciplina');
        $aluno->data_matricula = request('data_matricula');
        $aluno->nota = request('nota');

        $aluno->save();
        return redirect('/alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alunos::findOrFail($id)->delete();
        return redirect('/alunos');
    }
}
