<?php
  session_start();
?>

<!doctype html!>
<html>

<head>

  <!-- METAS -->
  <meta charset="utf-8">
  <meta name="rating" content="general"> <!-- FaixaEtaria -->
  <meta http-equiv="content-language" content="pt-br"> <!-- Lingua do site -->
  <meta name="viewport" content="width=320, initial-scale=1"> <!-- Responsividade em mobile -->
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

  <title> DubWare OP2 </title>

  <!-- Importações -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css\style.css">

  <style>
  #imgtres {
  width: 60%;
}
.card-footer {
    position:relative;
    bottom:0;
    width:100%;
}
 </style>

</head>

<body class="all">

    <!-- Barra Superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">DubWare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
       
    
          <?php
       if(isset($_SESSION['email']))
       {
          echo '<div class="dropdown show">
          <a class="mx-5" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup=""
            aria-expanded="false">
            <img class="ml-4" src="./img/perfil.png " width="40" height="40" alt="">
          </a>
       
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Meu perfil</a>
            <a class="dropdown-item" href="#">Configurações</a>
            <a class="dropdown-item" href="./php/logout.php">Sair</a>
          </div>
        </div>
       
       </div>';
       }
       else
       {
          echo '<a href="php/login.php">LOGIN</a>';
       }
       ?>
       
        </div>

      </div>
    </nav>

    <!-- Meio -->

    <div class="card text-center container my-4">

      <div class="card-body">
        <h5 class="card-title">Olá, Gustavo do Minecraft</h5>
        <p class="card-text">Monte o seu computador com quiser</p>
        <a href="#" class="btn btn-primary">Total: R$</a>
      </div>
    </div>


    <div class="card-group mx-5 my-5">
	
	<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">Placa Mãe</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>

     

<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">Processador</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>
<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">HD</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>
<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">SSD</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>
<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">Placa de video</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>
		  </div>
		  </div>
		  </div>
      </div>
      
      <div class="card-group mx-5 my-5">
	
	<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">Fonte de alimentação</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>

     

<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">Cooler</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>
<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">Gabinete</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>
<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">Mouse</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>
<div class="card">
        <img src="img/logodourado.png"  id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
        <div class="card-body">
          <h4 style="text-align: center;">Teclado</h4>
          <p class="card-text" style="text-align: center;">...
          </p>
		  <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable">
                Escolher
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$</a>
              </div>
            </div>

          </div>
        </div>

      </div>


</div>
		  </div>
		  </div>
		  </div>
		  </div>
	
		  
		  
		  
		  
		    <!-- Copias -->
		  
		  
    
	
	




    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>



</html>