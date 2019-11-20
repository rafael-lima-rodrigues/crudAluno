@extends('layout')

@section('content')
<br>
<h2 class="text-center font-weight-bold text-success">Editar Aluno</h2>
<br>
<div class="container ">
<form method="POST" action="/alunos/{{$alunos->id}}">

@method('PATCH')
{{ csrf_field() }}

<div class="container">
    <div class="form-group">
            <label for="lblid" class="font-weight-bold">ID: </label>
            <label for="textid" class=" font-weight-bold">{{ $alunos->id}}</label>
    </div>
    <div class="form-group">
            <label for="lblnome" class="font-weight-bold">Nome: </label>
            <input class=" form-control col-6 col-md-4" type="text" id="nome" name="nome" placeholder="Title" value="{{ $alunos->nome }}" required>
        </div>
        <div class="form-group">
            <label for="disciplina" class="font-weight-bold">Disciplina: </label>
            <input class="form-control col-6 col-md-4" type="text" id="disciplina" name="disciplina" value="{{ $alunos->disciplina }}" required>
        </div>
        <div class="form-group">
            <label for="data_matricula" class="font-weight-bold">Matricula: </label>
            <input class="form-control col-6 col-md-2" type="date" id="data_matricula" name="data_matricula" value="{{ $alunos->data_matricula}}" required>
        </div class="form-group">
        <div class="form-group">
                <label for="nota" class="font-weight-bold">Nota: </label>
                <input class="col-1 form-control" type="text"  id="nota" name="nota" placeholder="Nota" value="{{ $alunos->nota }}" required>
            </div>
            <div class=" container">
                    <input type="button" class="btn btn-warning " id="btnGrv" value="Votlar" 
                    onclick="javascript: location.href = '/alunos'">
                <input type="submit" class="btn btn-success " id="btnGrv" value="Gravar">
            </div>
</div>
</form>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Atenção!!</strong>Existem erros no formulario.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
    <li>{{$error}}</li>        
        @endforeach
    </ul>
</div>
    @endif
@endsection