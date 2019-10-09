@extends('layout')

@section('content')
<form method="POST" action="/alunos/{{$alunos->id}}"></form>

@method('PATCH')
{{ csrf_field() }}

<div class="container">
    <div>
            <label for="id">ID: </label>
            <input type="text" id="id" name="id" placeholder="Title" value="{{ $alunos->id }}" required>
    </div>
    <div>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Title" value="{{ $alunos->nome }}" required>
        </div>
        <div>
            <label for="data_matricula">Matricula: </label>
            <input type="text" id="matricula" name="matricula" placeholder="AAAA/MM/DD" value="{{ $alunos->data_matricula }}" required>
        </div>
        <div>
                <label for="nota">Matricula: </label>
                <input type="text" id="nota" name="nota" placeholder="Nota" value="{{ $alunos->nota }}" required>
            </div>
</div>

    
@endsection