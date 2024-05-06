<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Area do Funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!--Minha barra de navegação-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navegue</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Topo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Registros</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--Menu do usuario-->
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php

                //include('config.php');

                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-cadastro.php");
                        break;
                    case "listar":
                        include("listar-registros.php");
                        break;
                    case "salvar":
                        include("salvar-usuario.php");
                        break;
                    case "editar":
                          include("editar-registro.php");
                          break;
                    default:
                         print "<h1>Olá! :)</h1>";
                }
            ?>
        </div>
    </div>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>