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
    <h3>Cadastro de Exame - Sumário de Urina</h3>
    <form class="form-inline" name="" method="post">
      <input type="text" class="form-control form-exames" placeholder="Código do Paciente">
      <!--Caracteres Gerais-->
      <div id="exames">
        <h3>Caracteres Gerais</h3>

          <input type="text" class="form-control  " placeholder="Volume" aria-describedby="basic-addon2">
          <select class="form-control">
            <option>Cor</option>
            <option name="AmareloClaro">Amarelo Claro</option>
            <option name="AmareloEscuro">Amarelo Escuro</option>
          </select>
          <select class="form-control">
            <option>Cheiro</option>
            <option name="Caracteristico">Característico</option>
            <option name=""></option>
          </select>
          <input type="text" class="form-control" placeholder="Densidade" aria-describedby="basic-addon2">
          <input type="text" class="form-control" placeholder="PH" aria-describedby="basic-addon2">
          <input type="text" class="form-control" placeholder="Deposito" aria-describedby="basic-addon2">
      </div>
      <!--Exame Quimico-->
      <div id="exames">
        <h3>Exame Químico</h3>
          <div class="label">
            <select class="form-control">
              <option>Glicose</option>
              <option name="Ausente">Ausente</option>
              <option name="Presente">Presente</option>
            </select>
          </div>
          <div class="label">
            <select class="form-control">
              <option>Proteinas</option>
              <option name="Ausente">Ausente</option>
              <option name="Presente">Presente</option>
            </select>
          </div>
          <div class="label">
            <select class="form-control">
              <option>Urobilina</option>
              <option name="Ausente">Ausente</option>
              <option name="Presente">Presente</option>
            </select>
        </div>
        <div class="label">
          <select class="form-control">
            <option>Cetona</option>
            <option name="Ausente">Ausente</option>
            <option name="Presente">Presente</option>
          </select>
        </div>
        <div class="label">
          <select class="form-control">
            <option>Urobilinogenio</option>
            <option name="Ausente">Ausente</option>
            <option name="Presente">Presente</option>
          </select>
        </div>
        <div class="label">
          <select class="form-control">
            <option>Pig Biliares</option>
            <option name="Ausente">Ausente</option>
            <option name="Presente">Presente</option>
          </select>
        </div>
        <div class="label">
          <select class="form-control">
            <option>Sangue</option>
            <option name="Ausente">Ausente</option>
            <option name="Presente">Presente</option>
          </select>
        </div>
        <div class="label">
          <select class="form-control">
            <option>Nitrito</option>
            <option name="Ausente">Ausente</option>
            <option name="Presente">Presente</option>
          </select>
        </div>
        <div class="label">
          <select class="form-control">
            <option>AC Ascorbico</option>
            <option name="Ausente">Ausente</option>
            <option name="Presente">Presente</option>
          </select>
        </div>
        <div class="label">
          <select class="form-control">
            <option>Bilirrubina</option>
            <option name="Ausente">Ausente</option>
            <option name="Presente">Presente</option>
          </select>
        </div>
      </div>
      <!--contagem de plaquetas-->
      <div id="exames">
        <h3>Sedimentoscopia</h3>
        <textarea class="form-control" rows="5"></textarea>
      </div>
      <div id="exames">
        <h3>Parasitologico de fezes</h3>
        <select class="form-control">
          <option>Helmintos</option>
          <option name="Ausente">Positivo</option>
          <option name="Presente">Negativo</option>
        </select>
        <select class="form-control">
          <option>Protozoarios</option>
          <option name="Ausente">Positivo</option>
          <option name="Presente">Negativo</option>
        </select>
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
