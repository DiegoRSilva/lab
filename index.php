<?php
@require 'source/database/MyslPDO.php';
@require 'source/classes/Usuario.php';

?>
<!Doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Emissão de Laudos Laboratóriais</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

</head>
<body>
  <div class="container">
    <div class="">
      <img src="images/logo.png" class="img-responsive cabecalho" style="margin-top:5px"/>
      <h3 style="padding-right:25px"> Hospital da Polícia Militar General Edson Ramalho</h3>
      <h4> Laboratório de Analises Clínicas</h4>
      <br>
      <h3>Acesso ao sistema:</h3>
      <input type="text" placeholder="Usuário" name="usuario">
      <input type="password" placeholder="Senha" name="senha"><Br>
      <a href="" ><h5>Esqueci minha senha.</h5></a>
      <input type="submit" class="btn btn-sm btn-info" value="Entrar">
      <input type="submit" class="btn btn-sm btn-info" value="Cadastrar" onclick="pages/cadUsuario.php">
      <?php
          if (isset($_POST['usuario'])) {
            $usuario = Usuario::instance();
            $res = $usuario->getUser($_POST['usuario'],$_POST['senha']);
          }
         ?>
    </div>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
