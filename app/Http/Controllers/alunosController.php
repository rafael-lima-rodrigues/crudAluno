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
            'nota' => 'required']);
        
            
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
    public function show(Alunos $alunos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alunos $alunos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alunos $alunos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alunos $alunos)
    {
        //
    }
}
