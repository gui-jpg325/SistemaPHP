<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://i.pinimg.com/originals/63/85/df/6385dfe03f99ea9251b35ef83758ae3e.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Menu</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>
    .carrosel{
      margin-top: 30px;
      margin-left: 5%;
      margin-right: 75%;
    }
  </style>
  <body class="p-0 m-2 border-0 bd-example">
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="https://i.pinimg.com/originals/63/85/df/6385dfe03f99ea9251b35ef83758ae3e.png" alt="User Icon" style="width:60px; padding-left:10px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastro
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cadastros/cadastroCliente.php">Cliente</a></li>
                <li><a class="dropdown-item" href="cadastros/cadastroFuncionario.php">Funcionário</a></li>
                <li><a class="dropdown-item" href="cadastros/cadastroFornecedor.php">Fornecedor</a></li>
                <li><a class="dropdown-item" href="cadastros/cadastroProduto.php">Produto</a></li>
                <li><a class="dropdown-item" href="cadastros/cadastroUsuario.php">Usuário</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consulta
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="consultaCliente.php">Cliente</a></li>
                <li><a class="dropdown-item" href="consultaFuncionario.php">Funcionário</a></li>
                <li><a class="dropdown-item" href="consultaFornecedor">Fornecedor</a></li>
                <li><a class="dropdown-item" href="consultaProduto">Produto</a></li>
                <li><a class="dropdown-item" href="consultaUsuario">Usuário</a></li>
              </ul>
            </li>
            <li class="nav-item">
          <a class="nav-link" href="index.php">Sair</a>
        </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="carrosel">  

<div id="demo" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/piano.gif" alt="Los Angeles" class="d-block" style="width:100%">
    <div class="carousel-caption">
      
    </div>
  </div>
  <div class="carousel-item">
    <img src="img/porsche1.gif" alt="Chicago" class="d-block" style="width:100%">
    <div class="carousel-caption">
 
    </div> 
  </div>
  <div class="carousel-item">
    <img src="img/porsche2.gif" alt="New York" class="d-block" style="width:100%">
    <div class="carousel-caption">
      
    </div>  
  </div>
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

</div>
 

</body> 
</html>