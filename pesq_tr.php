<?php  include "coon.php";  ?>


<?php 


session_start();



if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}


else if(($_SESSION["acesso"] != 'ADM' ))
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


<link rel="icon" href="img/icon.ico">





<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='pesq_per.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
<title>SISTEMA RAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <p  style="font-size: 12px;"><i><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></i></p>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
         <li class="active"><a href="dashboard.php">Voltar</a></li>
      <li class="active"><a href="Logout.php">Logout</a></li>

                </ul>
            </div>

        </div>
    </div>





 



   <form class="form-inline" role="form"   method="POST" action="pesq_tr.php" style="margin-left:10%;">
    <div class="form-group">
   

    </div>
     
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
  <div class="form-group ">
      
       
      <label for="email">MATRÍCULA (TR)  </label>
      <input type="text" class="form-control"  name="ratba" placeholder="Pesquisa" >
   
     </div> 
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
        <th>NÚMERO</th>
        <th>BA</th>
        <th>TR</th>
         <th>NOME</th>
        <th>DATA</th>
         <th>RAT F</th>
        <th>RAT V</th>
         <th>MATERIAL</th>
   
        
        
      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{



$ratba = $_POST['ratba'];

$sql = mysql_query ("select * from principal   where tr = '$ratba' ORDER BY data desc limit 25" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      <?php $ratv = $ratv = $dado ["ratv"]; ?>
      <?php $ratf = $ratf = $dado ["ratf"]; ?> 
      <?php $ratm = $ratm = $dado ["ratm"]; ?> 
<td> <?php echo $dado ["n_rat"];  ?></td>
<td> <?php echo $dado ["ba"];  ?></td>
<td> <?php echo $dado ["tr"];  ?></td>
<td> <?php echo $dado ["nome"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>
<td><?php echo "<a target='_blank' href='rats/$ratf'> <span class='glyphicon glyphicon-new-window' aria-hidden='true'></a>"?></td>
<td><?php echo "<a target='_blank' href='rats/$ratv'> <span class='glyphicon glyphicon-new-window' aria-hidden='true'></a>"?></td>
<?php if($ratm == 'null'){?>

<td></td>

    <?php }else{ ?>

<td><?php echo "<a target='_blank' href='rats/$ratm'> <span class='glyphicon glyphicon-new-window' aria-hidden='true'></a>"?></td>



<?php } } } }?>

</body>
</html>

