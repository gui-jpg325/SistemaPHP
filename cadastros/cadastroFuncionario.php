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
        <label for="inputEmail4" class="form-label">NOME</label><br>
        <input type="text" class="form-control" name="nome">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">GENERO</label><br>
        <input type="text" class="form-control" name="genero">
      </div>
      <div class="col-md-6">
        <label for="cpf" class="form-label">CPF</label><br>
        <input type="text" maxlength="11" name="cpf" class="form-control" onblur="TestaCPF(this.value);">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">RG</label><br>
        <input type="text" maxlength="9" class="form-control" name="rg">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">ESTADO CIVIL</label><br>
        <input type="text" class="form-control" name="estadoCivil" >
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">CÔNJUGE</label><br>
        <input type="text" class="form-control" name="nm_conjuge" >
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">CPF CONJUGÊ</label><br>
        <input type="text" class="form-control" name="cpf_conjuge" onblur="TestaCPF(this.value);">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">GRAU INSTRUÇÃO</label><br>
        <input type="text" class="form-control" name="grauInstrucao" >
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">FORMAÇAO</label><br>
        <input type="text" class="form-control" name="formacao">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">PAI</label><br>
        <input type="text" class="form-control" name="nm_pai">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">MAE</label><br>
        <input type="text" class="form-control" name="nm_mae">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">CELULAR</label><br>
        <input type="text" maxlength="15" name="telefone" id="telefone" class="form-control" onblur="mascaracelular(this.value); ">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">ID do funcionario</label><br>
        <input type="number" class="form-control" name="funcionario">
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
  $cliente = array($_POST['nome'], $_POST['genero'], $_POST['cpf'], $_POST['rg'], $_POST['estadoCivil'], $_POST['nm_conjuge'], 
                   $_POST['cpf_conjuge'], $_POST['grauInstrucao'], $_POST['formacao'], $_POST['nm_pai'],
                   $_POST['nm_mae'], $_POST['telefone'], $_POST['funcionario'],
                   $_POST['bairro'], $_POST['cidade'], $_POST['uf'], $_POST['funcionario'] );

  $conteudo = "Funcionario: ";
  
  for($i = 0; $i < count($cliente); $i++)
  {
    echo "<br>".$cliente[$i];
    $conteudo .= $cliente[$i].", ";
    
  }
  $conteudo.="
  ";
  $caminho = "funcionario.txt";

    if(file_put_contents($caminho,$conteudo,FILE_APPEND)){
      echo"<script> alert('Dados cadastrado com sucesso');</script>";
    }
    else {
      echo"<script> alert('Erro ao cadastrar!');</script>";
      
    }
  }
?>
