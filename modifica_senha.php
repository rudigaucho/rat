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
<html lang="en">
<head>
<link rel="icon" href="logo.png">

<script type="text/javascript">
function saidasuccessfully()
{

 
  setTimeout("window.location='index.html'",3000);
  
  
}
</script>



<link rel="icon" href="img/logo_oi.png">
  

  <title>FCA</title>
  <link rel="icon" href="img/logo_oi.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </script>
  <style>
  
 #voltar
 {

float:right;

 }
 
 body
 {
   
     background:white;
   
 }

 
  #teste{background:white;padding:1%; border: solid 2px black;margin-top: 0%; }
  
  
    .btn
    {

      background: #24DCF2;
    }
    .btn:hover
    {

      background: #7BEB1C;
      color:black;
    }

    #edit
    {
       background: #F47315;
       


    }

    #edit:hover
    {

     background: #F4BE0D;


    }

    #carga
    {

    color:black;
    background: #EF8821;

    }
     #carga:hover
    {

    color:black;
    background: #E93F11;

    }
    #logout
    {

      background: white;
    }
    ;
  </style>

   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
</head>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li><a href="#"></a></li> 
     
      <li class="active"><a href="Logout.php">Logout</a></li>
    </ul>

  </div>

</nav>





<div class="container">
  <div class="row content">
   
    <div class="col-sm-8  col-md-offset-2" id="teste" style="margin-top:12%;">
  <form role="form" name="seachform" method="post" action="modifica_senha.php " >
  <div class="form-group" >
 
  
<br><br>
    <label for="email">Digite a senha nova: </label><br>
   
    <input type="password" class="form-control" name="senha1"   id="senha1" required >
     <label for="email">Repita a senha: </label>
    <input type="password" class="form-control" name="senha2"  id="senha2" required >




    
  </div>
  <button type="submit" name="submit" id="submit" class="btn btn-default"> <strong>Alterar</strong> </button>
    
  
</form>


  
  </div>
</div>

<?php
if (isset($_POST ['submit'])  )
{
  
  $senha1= $_POST['senha1'];
  $senha2 = $_POST['senha2'];
  
  if(  $_POST['senha1'] == $_POST['senha2'])
  {
  $query = mysql_query ("update usuario set  senha = '".$senha1."'  where tr = '".$_SESSION['tr']."'   " );
$sql = mysql_query($query);

  echo " <h2  >SENHA MODIFICADA COM SUCESSO! </h2>";
    echo "<script>saidasuccessfully()</script>";

  }

  
  else
  {
    if ( $_POST['senha1'] != $_POST['senha2'] )
  {
    
    echo " <h2>SENHAS NÃO CONFEREM! </h2>";
    
    
  }
    
    
    
  }
  
  
  
  
}



?>


</body>
</html>

