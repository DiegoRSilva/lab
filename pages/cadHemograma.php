<?php
@require '../source/database/MyslPDO.php';

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
    <h3>Cadastro de Exame - Hemograma</h3>
    <form class="form-inline" name="" method="post">
      <input type="text" class="form-control form-exames" placeholder="Código do Exame">
      <input type="date" class="form-control">
      <!--eritograma-->
      <div id="exames">
        <h3>Eritograma</h3>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Hemacias" aria-describedby="basic-addon2">
          <span class="input-group-addon " id="basic-addon2">milhões/mm3</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Hemoglobina" aria-describedby="basic-addon2" name="hemoglobina">
          <span class="input-group-addon" id="basic-addon2">g/dl</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Hematocrito" aria-describedby="basic-addon2" name="hematocrito">
          <span class="input-group-addon" id="basic-addon2">%</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="V.C.M" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">u3</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="H.C.M" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">uu</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="C.H.C.M" onFocus="" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">%</span>
        </div>
      </div>

      <!--leucograma-->
      <div id="exames">
        <h3>Leucograma</h3>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Leucocitos totais" aria-describedby="basic-addon2" name="leucocitosTotais">
          <span class="input-group-addon" id="basic-addon2">u3</span>
        </div><br>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Leucocitos - V. Relativos" aria-describedby="basic-addon2">
          <span class="input-group-addon " id="basic-addon2">%</span>
          <input type="text" class="form-control" placeholder="Leucocitos - V. Absolutos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">mm3</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Segmentados - V. Relativos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">%</span>
          <input type="text" class="form-control" placeholder="Segmentados - V. Absolutos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">mm3</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Eosinofilos - V. Relativos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">%</span>
          <input type="text" class="form-control" placeholder="Eosinofilos - V. Absolutos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">mm3</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Basofilos - V. Relativos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">%</span>
          <input type="text" class="form-control" placeholder="Basofilos - V. Absolutos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">mm3</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Linfocitos - V. Relativos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">%</span>
          <input type="text" class="form-control" placeholder="Linfocitos - V. Absolutos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">mm3</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Monocitos - V. Relativos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">%</span>
          <input type="text" class="form-control" placeholder="Monocitos - V. Absolutos" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">mm3</span>
        </div>
      </div>
      <!--contagem de plaquetas-->
      <div id="exames">
        <h3>Contagem de Plaquetas</h3>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="Plaquetas" aria-describedby="basic-addon2">
          <span class="input-group-addon " id="basic-addon2">milhões/mm3</span>
        </div>
        <div class="input-group label">
          <input type="text" class="form-control" placeholder="V.H.S" aria-describedby="basic-addon2">
          <span class="input-group-addon " id="basic-addon2">milhões/mm</span>
        </div>
      </div>
      <br><button class="btn btn-sm btn-info">Salvar</button>
    </form>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lab.js"></script>
</body>
</html>
