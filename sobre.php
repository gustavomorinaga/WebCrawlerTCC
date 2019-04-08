<?php
  session_start();
?>


<!doctype html!>
<html>

<head>

    <!-- METAS -->
  <meta charset="utf-8">
  <meta name="rating" content="general" > <!-- FaixaEtaria -->
  <meta http-equiv="content-language" content="pt-br">  <!-- Lingua do site -->
  <meta name="viewport" content="width=320, initial-scale=1"> <!-- Responsividade em mobile -->
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

  <title> DubWare Sobre</title>

    <!-- Importações -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css" >

</head>

<body class="body">
    <div class="all">

          <!-- Barra Superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="./index.php">
<img class="ml-4" src="./img/LogoDourado.png" width="40" height="40" alt="">
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
          
        </ul>
        <form class="form-inline my-1 my-lg-0 px-md-5 .align-content-xl-center">
          <input class="form-control mr-sm-2" type="search" placeholder="Escreva..." aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
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
        <div class="card-group mx-5 my-5">

            <div class="card">
                <img src="img/leo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Lenardo Vitorino Silva</h4>
                    <p class="card-text" style="text-align: center;"></p>
                </div>
            </div>

            <div class="card">
                <img src="img/gu.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Gustavo Matheus Morinaga Cardoso</h4>
                    <p class="card-text" style="text-align: center;"></p>

                </div>
            </div>

            <div class="card">
                <img src="img/hiroshi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Hiroshi Odo</h4>
                    <p style="text-align: center;" class="card-text"> </p>

                </div>
            </div>
            <div class="card">
                <img src="img/semfoto.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Kaique Silva de Jesus Gomes</h4>
                    <p style="text-align: center;" class="card-text"> </p>

                </div>
            </div>
            <div class="card">
                <img src="img/semfoto.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Yuri Silva de Jesus Gomes</h4>
                    <p style="text-align: center;" class="card-text"> </p>

                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
</body>

</html>
</body>

</html>