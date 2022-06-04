<?php
// servidores variaveis super globais GET, POST

// GET
//  $nome =  $_GET["nome"];
//  $email = $_GET["email"];
//  $sexo = $_GET["sexo"];


 // POST 

//   $nome = $_POST["nome"]; 
//   $email = $_POST["email"];
//   $sexo = $_POST["sexo"];


//  echo $nome . ", " . $email . ", " . $sexo;

//  echo "<br>";
 
// //  print_r($_GET);
//      print_r($_POST);

// Request

// print_r($_REQUEST);

// echo "<br>";
// $nome =  $_REQUEST["nome"]; 
// $email = $_REQUEST["email"];
// $sexo =  $_REQUEST["sexo"];

// echo $nome . ", " . $email . ", " . $sexo;

// echo "<br>";

// echo "Id :" . $_REQUEST["id"];
// echo "<br> Produto : " . $_REQUEST["produto"];
// echo "<br> Valor : " . number_format($_REQUEST["valor"], 2, ",",".") ;

// validação por back-end 
$nome =  $_REQUEST["nome"]; 
$email = $_REQUEST["email"];
$sexo =  $_REQUEST["sexo"];


// if( strlen($nome) <= 5){
//      echo "CAMPO NOME OBRIGATÓRIO!!!";
// }

if( empty($nome)){
     echo "CAMPO NOME OBRIGATÓRIO!!!";
     header("Location: formulario01.php?erro=nome");
}


?>