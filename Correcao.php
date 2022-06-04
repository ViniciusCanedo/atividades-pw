<?php
function Adicao($arg1, $arg2){
  //$resultado =  $arg1 + $arg2 ;
  //return $resultado;
  return  $arg1 + $arg2 ;
}


function Subtracao($arg1, $arg2){
    //$resultado =  $arg1 - $arg2 ;
    //return $resultado;
    return  $arg1 - $arg2 ;
  }

  function Multiplicacao($arg1, $arg2){
    //$resultado =  $arg1 * $arg2 ;
    //return $resultado;
    return  $arg1 * $arg2 ;
  }



  function Div($arg1, $arg2){
    //$resultado =  $arg1 / $arg2 ;
    //return $resultado;
    return  $arg1 / $arg2 ;
  }


// 
$numero_1 = 30;
$numero_2 = 100;
$op = "/";


switch ($op) {
    case '+':
      $soma =   Adicao($numero_1, $numero_2);
      echo "O resultado de $numero_1 + $numero_2 : ".$soma; 
        break;

    case '-':
        $soma =  Subtracao($numero_1, $numero_2);
        echo "O resultado de $numero_1 - $numero_2 : ".$soma; 
        break;
    
    case 'x':
        $soma =  Multiplicacao($numero_1, $numero_2);
        echo "O resultado de $numero_1 * $numero_2 : ".$soma; 
            break; 
     
    case '/':
      $soma =  Div($numero_1, $numero_2);
                echo "O resultado de $numero_1 / $numero_2 : ".$soma; 
            break;        
    
}

echo "<hr>";
if( $op =="+"){
    $soma =   Adicao($numero_1, $numero_2);
    echo "O resultado de $numero_1 + $numero_2 : ".$soma; 
  }

  if( $op =="-"){
      $soma =  Subtracao($numero_1, $numero_2);
      echo "O resultado de $numero_1 - $numero_2 : ".$soma; 
        }
  
  if( $op =="x"){
      $soma =  Multiplicacao($numero_1, $numero_2);
      echo "O resultado de $numero_1 * $numero_2 : ".$soma; 
       }
   
 if( $op =="/"){
    $soma =  Div($numero_1, $numero_2);
              echo "O resultado de $numero_1 / $numero_2 : ".$soma; 
     }





?>