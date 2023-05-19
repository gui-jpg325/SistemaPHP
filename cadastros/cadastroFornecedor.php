<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faça seu cadastro</title>
    <link rel="icon" href="https://i.pinimg.com/originals/63/85/df/6385dfe03f99ea9251b35ef83758ae3e.png" type="image/icon type">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://i.pinimg.com/originals/63/85/df/6385dfe03f99ea9251b35ef83758ae3e.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form class="row g-3" action="#" method="POST">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">NOME FANTASIA</label><br>
        <input type="text" class="form-control" name="nomeFantasia" >
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">RAZÃO SOCIAL</label><br>
        <input type="text" class="form-control" name="razaoSocial" >
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">CELULAR</label><br>
        <input type="text" maxlength="15" name="telefone" id="telefone" class="form-control" onblur="mascaracelular(this.value); ">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">CNPJ</label><br>
        <input type="number" class="form-control" name="cnpj">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">INSCRIÇAO ESTADUAL</label><br>
        <input type="number" class="form-control" name="inscricaoEstadual">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">INSCRIÇÃO MUNICIPAL</label><br>
        <input type="number" class="form-control" name="inscricaoMunicipal">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">E-MAIL</label><br>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="col-md-6">
        <label  for="inputPassword4"  class="form-label">CEP</label><br>
        <input name="cep" type="text" id="cep" class="form-control" onblur="pesquisacep(this.value);">
      </div>
      <div class="col-md-6">
        <label  for="inputEmail4" class="form-label">RUA</label><br>
        <input name="rua" type="text"  id="rua" class="form-control">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Nº</label><br>
        <input type="number" class="form-control" name="numero">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">COMPLEMENTO</label><br>
        <input type="text" class="form-control" name="complemento">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">CODIGO MUNICÍPIO</label><br>
        <input type="number" class="form-control" name="cd_municipio">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">BAIRRO</label><br>
        <input name="bairro" type="text" class="form-control" id="bairro">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">CIDADE</label><br>
        <input name="cidade" type="text"  id="cidade" class="form-control">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">ESTADO</label><br>
        <input name="uf" type="text" id="uf" class="form-control">
      </div>
      <div class="col-md-12">
      <input class="btn btn-sucess" type="submit" value="Enviar">
      <input class="btn btn-danger" type="reset" value="Limpar">
      <a href="../menu.php"> <input class="btn btn-danger" type="button" value="Voltar"><a>      
      <br>
      
      </div>
      
    </form>    

  </div>
</div>
<script type="text/javascript" src="../js/viacep.js"></script>
<script type="text/javascript" src="../js/validaCPF.js"></script>
<script type="text/javascript" src="../js/mascaracelular.js"></script>
<script type="text/javascript" src="../js/mascaracpf.js"></script>
  </body>
</html>
<?php
if(!empty($_POST))
{
  $cliente = array($_POST['nomeFantasia'], $_POST['razaoSocial'], $_POST['cnpj'], $_POST['inscricaoEstadual'], $_POST['inscricaoMunicipal'], $_POST['email'], 
                   $_POST['complemento'], $_POST['cd_municipio'], $_POST['telefone'], $_POST['bairro'], $_POST['cidade'], $_POST['uf'], );
                  
                   

  $conteudo = "Fornecedor: ";
  
  for($i = 0; $i < count($cliente); $i++)
  {
    echo "<br>".$cliente[$i];
    $conteudo .= $cliente[$i].", ";
    
  }
  $caminho = "fornecedor.txt";

    if(file_put_contents($caminho,$conteudo,FILE_APPEND)){
      echo"<script> alert('Dados cadastrado com sucesso');</script>";
    }
    else {
      echo"<script> alert('Erro ao cadastrar!');</script>";
      
    }
  }
?>
