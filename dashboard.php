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

<link rel="icon" href="img/icon.ico">


  <title>SISTEMA RAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 


   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>




</head>


<body>
    <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SISTEMA RAT</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
                             
                    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">CADASTRO
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cad_rat.php">RAT</a></li>
         
        </ul>
      </li>
                  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PESQUISA
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pesq_per.php">PERÍODO</a></li>
          <li><a href="pesq_rat.php">NÚMERO DA RAT</a></li>
          <li><a href="pesq_ba.php">NÚMERO DO BA</a></li>
          <?php if($_SESSION["acesso"] == 'ADM'){?>
          <li><a href="pesq_tr.php">MATRÍCULA (TR)</a></li>
           <?php } ?>
           
          
        </ul>
      </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PESSOAL
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="modifica_senha.php">ALTERA SENHA</a></li>
         <li><a href="logout.php">LOGOUT</a></li>
           
          
        </ul>
      </li>
                </ul>
            </div>

        </div>
    </div>
    <!--END NAV SECTION -->
    <!-- HOME SECTION -->

    <!-- SLIDER SECTION -->
    <div id="slides">
        <img src="img/book.jpg" alt=""  width="100%" height="620px" />
        

    </div>
   

</body>
</html>