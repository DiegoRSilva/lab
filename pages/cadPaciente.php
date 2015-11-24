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
    <h3>Cadastro de Paciente</h3>
    <form class="" name="" method="post">
      <!--Informações do Paciente-->
      <div class="label">
        <input type="text" class="form-control form-exames" placeholder="Código do Paciente">
      </div>
      <div class="label">
        <input type="text" class="form-control form-exames" placeholder="Nome do Paciente">
      </div>
      <div class="label">
        <input type="text" class="form-control form-exames" placeholder="Requisitante">
      </div>
      <div class="label">
        <input type="text" class="form-control form-exames" placeholder="Idade">
      </div>
      <br><button class="btn btn-sm btn-info">Salvar</button>
    </form>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
