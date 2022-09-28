<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Manhã/aula2109/css/bootstrap.min.css" />
    <style>
        /* div {
            border: 2px solid red;
        } */
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="/manhã/aula2109/imagens/logoPHP.png" alt="Bootstrap" width="90" height="48">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/manhã/aula2109/index.php">
            Home
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/manhã/aula2109/usuarios/usuarios.php">Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Manhã/aula2109/disciplinas/disciplinas.php">Disciplinas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Manhã/aula2109/salas/salas.php">Salas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cadastrar Usuario</a></li>
            <li><a class="dropdown-item" href="#">Cadastrar Clientes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cadastrar Disciplinas</a></li>
            <li><a class="dropdown-item" href="#">Cadastrar Salas</a></li>
          </ul>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
<div class="container">