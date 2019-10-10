@extends('layout')

@section('content')
<br>
<h2 class="text-center font-weight-bold text-success">Novo Aluno</h2>
<br>
<div class="container col-4 col-md-6 ">
    <form id="createAlunos" name="createAlunos" method="POST" action="/alunos">
        {{ csrf_field() }}
        <div class="container">
        <div class="form-group">
            <label for="lblnome" class="font-weight-bold col-6 col-md-2">Nome: </label>
            <input class="col-6 col-md-4" type="text" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="lbldisciplina" class="font-weight-bold col-4 col-md-2">Disciplina: </label>
            <input class="col-6 col-md-4" type="text" id="disciplina" name="disciplina" required>
        </div>
        <div class="form-group">
            <label for="lbldata_matricula" class="font-weight-bold col-4 col-md-2">Matricula: </label>
            <input type="date" id="data_matricula" name="data_matricula" required>
        </div>
        <div class="form-group">
            <label for="lblnota" class="font-weight-bold col-4 col-md-2">Nota: </label>
            <input class="col-1" type="text" id="nota" name="nota" required>
        </div>
        <div class="">
    <div class=" container col-4 col-md-4">
            <input type="submit" class="btn btn-success " id="btnGrv" value="Gravar">
            <input type="reset" class="btn btn-info" id="btnReset" value="Limpar">
        </div>
    </div>
    </form>
</div>
    
@endsection