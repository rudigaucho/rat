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


<link rel="icon" href="img/icon.ico">





<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='pesq_per.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
<title>SISTEMA GRUPO APA</title>
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





 



   <form class="form-inline" role="form"   method="POST" action="pesq_per.php" style="margin-left:10%;">
    <div class="form-group">
   

    </div>
     
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;} </style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div style="float:left;" class="bootstrap-iso">
  
  <div class="row">
   <label  for="data">
      Período
      </label>
    
     <div class="form-group ">
      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" autocomplete="off" id="date" name="date" placeholder="DE" type="text" required/>
        <input class="form-control"  autocomplete="off" id="date2" name="date2" placeholder="ATÉ" type="text" required/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="jquery-1.11.3.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<link rel="stylesheet" href="bootstrap-datepicker3.css"/>
<script type="text/javascript" src="bootstrap-datepicker.min.js"></script>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>
<script>
 $(document).ready(function(){
  var date_input=$('input[name="date2"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>

    
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
   
        
        
      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{


$data = $_POST['date'];
$data2 = $_POST['date2'];

if ($_SESSION['acesso'] == "ADM"){
$sql = mysql_query ("select * from principal   where data BETWEEN '$data' and '$data2' ORDER BY data asc" );

}
if ($_SESSION['acesso'] == "TEC"){

$sql = mysql_query ("select * from principal   where data BETWEEN '$data' and '$data2' and tr = '".$_SESSION['tr']."' ORDER BY data asc" );

}





$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      <?php $ratv = $ratv = $dado ["ratv"]; ?>
      <?php $ratf = $ratf = $dado ["ratf"]; ?> 
<td> <?php echo $dado ["n_rat"];  ?></td>
<td> <?php echo $dado ["ba"];  ?></td>
<td> <?php echo $dado ["tr"];  ?></td>
<td> <?php echo $dado ["nome"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>
<td><?php echo "<a target='_blank' href='rats/$ratf'> <span class='glyphicon glyphicon-new-window' aria-hidden='true'></a>"?></td>
  <td><?php echo "<a target='_blank' href='rats/$ratv'> <span class='glyphicon glyphicon-new-window' aria-hidden='true'></a>"?></td>


<?php } } }?>

</body>
</html>

