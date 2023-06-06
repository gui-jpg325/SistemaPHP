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
        <label for="inputEmail4" class="form-label">LINHA DO PRODUTO</label><br>
        <input type="text" class="form-control" name="linha" >
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">DESCRIÇÃO DO PRODUTO</label><br>
        <input type="text" class="form-control" name="ds_produto" >
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">GRUPO DE PRODUTO</label><br>
        <input type="text" class="form-control" name="gp_produto">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">NCM/SH</label><br>
        <input type="text" class="form-control" name="ncm_sh">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">MODELO</label><br>
        <input type="text" class="form-control" name="modelo">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">CÓDIGO DO PRODUTO</label><br>
        <input type="number" class="form-control" name="cd_produto">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">UNIDADE</label><br>
        <input type="number" class="form-control" name="unidade">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">PESO/GRAMAS</label><br>
        <input type="number" class="form-control" name="peso">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">FORNECEDOR</label><br>
        <input type="text" class="form-control" name="fornecedor">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">DATA DA COMPRA</label><br>
        <input type="number" class="form-control" name="dt_compra">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">ESTOQUE INICIAL</label><br>
        <input type="number" class="form-control" name="estq_inicial">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">CUSTO UNITÁRIO</label><br>
        <input type="number" class="form-control" name="cst_unitario">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">CUSTO TOTAL</label><br>
        <input type="number" class="form-control" name="cst_total">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">TAMANHO</label><br>
        <input type="text" class="form-control" name="tamanho">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">COR</label><br>
        <input type="text" class="form-control" name="cor">
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
  $cliente = array($_POST['linha'], $_POST['ds_produto'], $_POST['gp_produto'], $_POST['ncm_sh'], $_POST['modelo'], $_POST['cd_produto'], 
                   $_POST['unidade'], $_POST['peso'], $_POST['fornecedor'], $_POST['dt_compra'], $_POST['estq_inicial'], $_POST['cst_unitario'],
                   $_POST['cst_total'], $_POST['tamanho'], $_POST['cor'] );
                  
                   

  $conteudo = "Produto: ";
  
  for($i = 0; $i < count($cliente); $i++)
  {
    echo "<br>".$cliente[$i];
    $conteudo .= $cliente[$i].", ";
    
  }
  $conteudo.="
  ";
  $caminho = "produto.txt";

    if(file_put_contents($caminho,$conteudo,FILE_APPEND)){
      echo"<script> alert('Dados cadastrado com sucesso');</script>";
    }
    else {
      echo"<script> alert('Erro ao cadastrar!');</script>";
      
    }
  }
?>
