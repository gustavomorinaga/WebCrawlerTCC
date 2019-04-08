<?php
session_start();
?>

<!doctype html!>
<html>

<head>

  <!-- METAS -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="rating" content="general"> <!-- FaixaEtaria -->
  <meta http-equiv="content-language" content="pt-br"> <!-- Lingua do site -->
  <meta name="viewport" content="width=320, initial-scale=1"> <!-- Responsividade em mobile -->

  <title> DubWare OP2 </title>

  <!-- Importações -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css\style.css">

  <style>
    .card-footer {
      position: relative;
      bottom: 0;
      width: 100%;
    }
  </style>

</head>

<body class="body">
  <div class="all">

    <!-- Barra Superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="./index.php">
        <img class="ml-4" src="./img/dwlogo.png" width="40" height="25" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="p-2 text-dark" href="#">Mais populares</a>
          </li>
          <li class="nav-item active">
            <a class="p-2 text-dark" href="#">Suporte</a>
          </li>
          <li class="nav-item active">
            <a class="p-2 text-dark" href="sobre.php">Sobre nós</a>
          </li>
        </ul>
        <div class="form-inline my-1 my-lg-0 px-md-5 .align-content-xl-center">
          <input class="form-control mr-sm-2" placeholder="Escreva..." id="inputProduto" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" id="search">Buscar</button>

          <script type="text/javascript" src="./js/bundle.js"></script>

        </div>
        <div class="dropdown show">
          <a class="mx-5" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="" aria-expanded="false">
            <img class="ml-4" src="./img/perfil.png " width="40" height="40" alt="">
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Meu perfil</a>
            <a class="dropdown-item" href="#">Configurações</a>
            <a class="dropdown-item" href="./php/login.php">Entrar</a>
          </div>
        </div>

      </div>
    </nav>

    <!-- Meio -->

    <div class="card text-center container my-3">

      <div class="card-body">
        <h5 class="card-title">Olá, Gustavo do Minecraft</h5>
        <p class="card-text">Monte o seu computador com quiser</p>
        <a href="#" class="btn btn-primary">Total: R$</a>
      </div>
    </div>


    <div class="card-group mx-auto my-3">
      <span id="result" class="mx-auto"></span>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>