@extends('layout')

@section('content')
<div class="container">
        <h2>Listar Alunos</h2>
        <div class="container col-md-8">
    <table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Disciplina</th>
            <th scope="col">Matricula</th>
            <th scope="col">Nota</th>
            <th></th>
        </tr>
    </thead>
        @foreach ($alunos as $aluno)
        <tr>
            <tbody>
            <th>{{$aluno->id}}</th>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->disciplina}}</td>
            <td>{{$aluno->data_matricula}}</td>
            <td>{{$aluno->nota}}</td>
            <td>
                
                <button class="button" onclick="javascript: location.href='/alunos/{{$aluno->id}}/edit'">abrir</button>
            
            </td>
        </tr>
            </tbody>
        @endforeach

    </table>
</div>
</div>
@endsection