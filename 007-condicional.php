<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    // trabalha com condicional 1º simples,
    //  2º composto, 3º complexo
    
    // 1º simples 
     // if ( booleano)  
     $anoNasc = 2020;
     $anoAtual = 2022;
     // formula
     $idade = $anoAtual - $anoNasc;

     if(  $idade >= 16  &&  $idade <= 60 ){
       echo "<p> Permitido vota!! </p>";
     }

     if($idade < 16 || $idade > 60){
         echo "<p> Não e permitido vota</p>";
     }
    echo "<hr>";

    echo "<h1> Nota de um Aluno!!!</h1>";
    $nota1 = 1;
    $nota2 = 6;
    $nota3 = 6.89;
    // calcular a media do aluno
    echo $media = ( $nota1 + $nota2+ $nota3) / 3;

    if($media < 3 ){
        echo "<p> Nota Insuficiente</p>";
        echo "Estude mais rapaz!!!!";
    }

    if( $media >= 3 && $media < 6){
        echo "<p> Nota Regular </p>";
    }

    if($media >= 6 && $media <8){
        echo "<p>Nota Bom</p>";
    }
    if($media >=8 && $media <= 10){
        echo "<p>Nota Muito Bom!!";
    }


    //2° composto
    echo "<h1> Composto </h1>";
    $anoNasc = 1983;
    $anoAtual = 2022;
    $idade = $anoAtual - $anoNasc;
     if($idade >= 16  && $idade <= 60){
        echo "<p> Permitido vota</p>";
     }else{
        echo "<p> Não e permitido vota</p>";             //false
     }
   

     //  3 complexo
echo "<hr>";
     $anoNasc = 2015;
    $anoAtual = 2022;
    $idade = $anoAtual - $anoNasc;
     if($idade >= 16  && $idade <= 60){
        echo "<p> Permitido vota</p>";
     }else if($idade < 16 ){
        echo "<p> Não e permitido vota, 
              devido ser menor de 16 </p>";             //true
     } else {
        echo "<p> Não e permitido vota, 
        devido ser maior de 60 </p>";
     }
echo'<hr>';
     // escolha
     $numero1 = 2015;
     $numero2 = 2022;
     $op = "x";

     switch($op ){
         case "+" :
              $resultado = $numero1 + $numero2; 
         break;

         case "-" :
               $resultado = $numero1 - $numero2; 
         break;

         case "/" :
             $resultado = $numero1 / $numero2; 
         break;

         case "*" :
             $resultado = $numero1 * $numero2; 
         break;
         default:
              $resultado ="não temos esta operação!!";
         break;

     }
   
     echo  $resultado;


?>

    
</body>
</html>