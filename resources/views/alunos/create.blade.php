@extends('layout')

@section('content')
<div class=" row justify-content-md-center ">
    <form id="createAlunos" name="createAlunos" method="POST" action="/alunos">
        {{ csrf_field() }}
        <div class="row align-items-center">
            <label for="lblnome">Nome: </label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="lbldisciplina">Disciplina: </label>
            <input type="text" id="disciplina" name="disciplina" required>
        </div>
        <div>
            <label for="lbldata_matricula">Matricula: </label>
            <input type="text" id="data_matricula" name="data_matricula" required>
        </div>
        <div>
            <label for="lblnota">Nota: </label>
            <input type="text" id="nota" name="nota" required>
        </div>
        <div>
            <input type="submit" class="btn btn-success" id="btnGrv" value="Gravar">
            <input type="reset" class="btn btn-info" id="btnReset" value="Limpar">
        </div>
    </form>
</div>
    
@endsection