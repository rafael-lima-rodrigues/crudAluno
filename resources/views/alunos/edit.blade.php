@extends('layout')

@section('content')
<form method="POST" action="/alunos/{{$alunos->id}}">

@method('PATCH')
{{ csrf_field() }}

<div class="container">
    <div>
            <label for="id">ID: </label>
            <label for="id">{{ $alunos->id}}</label>
    </div>
    <div>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Title" value="{{ $alunos->nome }}" required>
        </div>
        <div>
            <label for="disciplina">Disciplina: </label>
            <input type="text" id="disciplina" name="disciplina" value="{{ $alunos->disciplina }}" required>
        </div>
        <div>
            <label for="data_matricula">Matricula: </label>
            <input type="date" id="data_matricula" name="data_matricula" value="{{ $alunos->data_matricula}}" required>
        </div>
        <div>
                <label for="nota">Nota: </label>
                <input type="text" id="nota" name="nota" placeholder="Nota" value="{{ $alunos->nota }}" required>
            </div>
            <div>
                <button type="submit">Atualizar</button>
            </div>
</div>
</form>
    
@endsection