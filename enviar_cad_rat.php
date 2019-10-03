<?php  include "coon.php";  ?>


<?php 


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}



 


?>



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='dashboard.php'",7000);
	
	
}


</script> 

<?php

session_start();




include "coon.php";








	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="icon" href="img/icon.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_rat.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO DE RAT</title>


</head>



<body>








<?php

$cod_cli = (mt_rand(1,1010200));

$num =$_POST['num'];
$ccto =$_POST['ccto']; 
$ba =$_POST['ba'];
$ratf =$_POST['ratf'];
$ratv =$_POST['ratv']; 







   

	$permite = array('image/jpg', 'image/jpeg' , 'image/png');

	  $type =$_FILES['ratf'] ['type'];
    $type2 =$_FILES['ratv'] ['type'];
    $type3 =$_FILES['ratm'] ['type'];

    $tamanho1 =$_FILES['ratf']['size'];
    $tamanho2 =$_FILES['ratv']['size'];
    $tamanho3 =$_FILES['ratm']['size'];

    if (empty($type))
            {

               $type = 'image/png';



            }

             if (empty($type2))
            {

               $type2 = 'image/png';



            }
            if (empty($type3))
            {

               $type3 = 'image/png';



            }




    if (!in_array($type,$permite) || !in_array($type2,$permite ) || !in_array($type3,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
	// echo "<script>saidasuccessfully()</script>";
}
else if ( ($tamanho1 > 1000000) || ($tamanho2 > 1000000)  || ($tamanho3 > 1000000))
{

echo "TAMANHO MÁXIMO DA IMAGEM 1MB!";
  // echo "<script>saidasuccessfully()</script>";
}


else{



if(isset($_FILES['ratf'])) {
	
	$extensao = strtolower (substr($_FILES['ratf'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "rats/";



move_uploaded_file($_FILES['ratf'] ['tmp_name'], $diretorio.$novo_nome )	;
	}
	
	if(isset($_FILES['ratv'])) {

$extensao = strtolower (substr($_FILES['ratv'] ['name'], -4));
	$novo_nome2  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "rats/";



move_uploaded_file($_FILES['ratv'] ['tmp_name'], $diretorio.$novo_nome2 )	;

	}

	if(isset($_FILES['ratm'])) {

		if($tamanho3 <= 0){
          $novo_nome3 = "null";

		}else{

$extensao = strtolower (substr($_FILES['ratm'] ['name'], -4));
	$novo_nome3  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "rats/";



move_uploaded_file($_FILES['ratm'] ['tmp_name'], $diretorio.$novo_nome3 )	;

	}
   }
 



$query = "insert into principal (n_rat,ba,tr,nome,data,ratf,ratv,ratm,ccto)";

$query.= "values ('$num','$ba','".$_SESSION['tr']."','".$_SESSION['nome']."',NOW(),'$novo_nome','$novo_nome2','$novo_nome3','$ccto')";













$sql = mysql_query($query);


if($sql )
{
  
  
      echo ' <h2>CADASTRADO COM SUCESSO!<br></h2> ';

  echo "<script>saidasuccessfully()</script>";
  

 ;
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}





}


?>

























</body>


</html>