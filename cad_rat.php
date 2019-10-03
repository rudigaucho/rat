<?php  include "coon.php";  ?>


<?php 


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}



 


?>






<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- ///////PASTA BOOTSTRAP ////////////////////-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


  <script src="jquery-min.js"></script>
  <script src="jquery-ui.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- ///////PASTA BOOTSTRAP ////////////////////-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href="img/icon.ico">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





  <script type="text/javascript">
    function loginsuccessfully() {
      setTimeout("window.location='cad_mat.php'", 3000);


    }
  </script>


  <title>CADASTRO DE RAT </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <script>
    swal("ATENÇÃO", "Verifique antes de enviar o arquivo da RAT se o mesmo está NÍTIDO , evitando que o mesmo seja DESCONSIDERADO. Recomenda-se a digitalização do documento.");
</script>

  <p style="font-size: 12px;"><i><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales </strong></i></p>
  <div class="navbar navbar-inverse navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <?php // echo $_SESSION["nome"]?></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">






          <li class="active"><a href="dashboard.php">Voltar</a></li>

        </ul>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="col-md-5 col-md-offset-3">

      <span><strong>REGISTRO DE RAT</strong></span>
      <ul class="nav nav-tabs">






      </ul>
      <br>
      <form class="form" role="form" name="seachform" method="post" enctype="multipart/form-data" action="enviar_cad_rat.php ">




        <div class="form-group">

          <label for="email">Nº DA RAT:</label>
          <input type="text" class="form-control" name="num" required maxlength="7" placeholder="7 digitos">
        </div>




        <div class="form-group">

          <label for="email">BA:</label>
          <input type="text" class="form-control" name="ba" required maxlength="9" placeholder="9 digitos">
        </div>

        <div class="form-group">

          <label for="email">CCTO:</label>
          <input type="text" class="form-control" name="ccto" required maxlength="7" placeholder="Apenas números com '0' no inicio">
        </div>


        <FIELDSET style="border: 1px solid; padding: 6px; padding-left:%;">
          <div class="form-group">

            <label for="email">RAT FRENTE: </label><br>
            <!-- <input type="file"    required name="ratf"/> -->

            <input type="file" id="file1" required name="ratf"  />
          </div>
        </FIELDSET>
        <br>
        <FIELDSET style="border: 1px solid; padding: 6px;  padding-left:2%;">
          <div class="form-group">
            <label for="email">RAT VERSO: </label><br>
            <!--
    <input type="file"    required name="ratv" />  -->
       
            <input type="file" id="file2" required name="ratv"  />

          </div>
        </FIELDSET>
        <br>
        <FIELDSET style="border: 1px solid; padding: 6px;  padding-left:2%;">
          <div class="form-group">
            <label for="email">MATERIAIS: </label><br>
            <!--
    <input type="file"    required name="ratv" />  -->
            
            <input type="file" id="file3" name="ratm"  />

          </div>
        </FIELDSET>
        <br>

        
  



        






      

        











        <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required> <strong>Enviar</strong>
        </button><br><br><br><br>
























      </form>

    </div>




</body>

</html>