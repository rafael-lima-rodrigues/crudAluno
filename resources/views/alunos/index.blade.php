@extends('layout')

@section('content')
<br>
<h2 class="text-center font-weight-bold text-success ">Listar Alunos</h2>
<br>
<div class="group-form">
        
        <div class="container col-md-12">
    <table class="table table-hover">
    <thead class="table-success">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Disciplina</th>
            <th scope="col">Matricula</th>
            <th scope="col">Nota</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
        @foreach ($alunos as $aluno)
        <tr>
            <tbody>
            <th class="font-weight-bold">{{$aluno->id}}</th>
            <td >{{$aluno->nome}}</td>
            <td>{{$aluno->disciplina}}</td>
            <td>{{$aluno->data_matricula}}</td>
            <td>{{$aluno->nota}}</td>
            <td>
                <button class="button btn btn-info " onclick="javascript: location.href='/alunos/{{$aluno->id}}/edit'">Editar</button>
            </td>
            <td>
            <form method="POST" action="/alunos/{{$aluno->id}}">
                @method('DELETE')
                @csrf
                <button class="button btn btn-danger ">Excluir</button>
            </form>
            
            </td>
        </tr>
            </tbody>
        @endforeach

    </table>
</div>
</div>
@endsection