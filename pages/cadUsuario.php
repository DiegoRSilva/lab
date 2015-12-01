<?php
@require '../source/database/MyslPDO.php';
@require '../source/classes/Usuario.php';
?>
<!Doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Emissão de Laudos Laboratóriais</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="">
      <img src="../images/logo.png" class="img-responsive cabecalho" style="margin-top:5px"/>
      <h3 style="padding-right:25px"> Hospital da Polícia Militar General Edson Ramalho</h3>
      <h4> Laboratório de Analises Clínicas</h4><br>
      <br>
      <?php @include('/menu.php');?>
    </div><br>
    <h3>Cadastro de Usuário</h3>
    <form class="" name="" method="post">
      <!--Informações do Paciente-->
      <div class="label">
        <input type="text" class="form-control form-exames" placeholder="Nome" name="nome">
      </div>
      <div class="label">
        <input type="text" class="form-control form-exames" placeholder="Função" name="funcao">
      </div>
      <div class="label">
        <input type="text" class="form-control form-exames" placeholder="Email" name="email">
      </div>
      <div class="label">
        <input type="text" class="form-control form-exames" placeholder="Usuario" name="usuario">
      </div>
      <div class="label">
        <input type="password" class="form-control form-exames" placeholder="Senha" name="senha">
      </div>
      <div class="label">
        <input type="password" class="form-control form-exames" placeholder="Repetir Senha" name="re-senha">
      </div>
      <br><button class="btn btn-sm btn-info" onclick="return validaruser()">Cadastrar</button>
    </form>
  </div>

  <?php
    if (isset($_POST['usuario'])) {
        if ($_POST['nome'] != null && $_POST['funcao'] != null && $_POST['email'] != null && $_POST['usuario'] != null && $_POST['senha'] != null) {
        $objUsuario = Usuario::instance();
        $senha = md5($_POST['senha']);
        $objUsuario->insertUser(array($_POST['nome'],$_POST['funcao'],$_POST['email'] ,$_POST['usuario'] ,$senha));
        if ($objUsuario) {
          echo "<script>alert('Usuário cadastrado.')</script>";
        }
      }else {
        echo "<script>alert('Usuário não cadastrado.')</script>";
      }
    }
   ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validaformulario.js"></script>
</body>
</html>
