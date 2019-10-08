</<!DOCTYPE html>
<html>
<head>
 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
 
<body>
    <ul class="nav justify-content-center  bg-success">
        <li class="nav-item">
          <a class="nav-link active text-white font-weight-bold" href="/alunos">Alunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="/alunos/create">Inserir Aluno</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    <div class="container">
        @yield('content')
    </div>    
 
</html>