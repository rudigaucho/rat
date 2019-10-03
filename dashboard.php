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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


    




</head>


<body background="img/book.jpg" >

<script>
    swal("Procedimento Rat \n \n *Caso tenha deslocamento ao cliente e obrigatório a assinatura do cliente na Rat. \n *Caso onde não necessite deslocamento para o cliente, tem que ter as informações descrita na RAT de quem ficou ciente do problema e qual era o problema “Descrever que não ouve deslocamento.  \n *Caso constatado defeito do cliente, tem que ser informado ao mesmo, o problema e uma possível previsão da regularização. \n *Todas as informações têm que estar descriminadas no campo de observação da Rat.  \n *Rat de OS, tem que ter a relação de todos os equipamentos utilizado descriminados.\n");
</script>
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
                        <ul class="dropdown-menu" >
                            <li><a href="cad_rat.php"><strong>RAT</strong></a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PESQUISA
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" >
                            <li><a href="pesq_per.php"><strong>PERÍODO</strong></a></li>
                            <li><a href="pesq_rat.php"><strong>NÚMERO DA RAT</strong></a></li>
                            <li><a href="pesq_ba.php"><strong>NÚMERO DO BA</strong></a></li>
                            <li><a href="pesq_ccto.php"><strong>CCTO</strong></a></li>
                            <?php if($_SESSION["acesso"] == 'ADM'){?>
                            <li><a href="pesq_tr.php"><strong>MATRÍCULA (TR)</strong></a></li>
                            <?php } ?>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PESSOAL
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" >
                            <li><a href="modifica_senha.php"><strong>ALTERA SENHA</strong></a></li>
                            <li><a href="logout.php"><strong>LOGOUT</strong></a></li>


                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
   



    






















   <br><br><br><br> <div class="col-sm"  style="margin-top:10%; width:60%; margin:auto; background-color:white;">
    <?php


$sql = mysql_query ("select nome, count(nome) as soma from principal  where  MONTH(data) = MONTH(NOW()) group by nome" );




$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0){

?>

<table id="myTable" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
  <th  scope="col">TÉCNICO</th>
  <th  scope="col">TOTAL</th>
  
  
 
  
  
  
</tr>
</thead>
<tbody>

<?php  while ($dado = mysql_fetch_assoc($sql)){
$dado2 = mysql_fetch_assoc($sql2); ?>
<tr>
  
  <td><?php echo $dado ["nome"];  ?></td>
  <td><?php echo $dado ["soma"]; ?></td>
  
  
  

 
  
  
</tr>
<?php }} ?> 

</tbody>

</table>






    </div>


</body>

</html>