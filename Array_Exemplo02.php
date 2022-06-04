<?php
   // array numerico e associativo
   $exemplo_01 = array();
   $exemplo_01[0] ="Isac";


   $exemplo_02 = array("Isac","Luiza","Erick","Jessica");


 // ver a estrutura da array

  var_dump($exemplo_02 );

  echo "<p> $exemplo_02[3]</p>";
  $exemplo_02[4] = 560;
  echo "<p> $exemplo_02[4]</p>";


  /*
   saber dinamicamente a quantidade de elemento no array
     usando a função count();
   */

 echo '$exemplo_02 tem total de elementos ' . count($exemplo_02);

// array associativo

 $meses = array(  
           "A"=> "Janeiro",
           "B"=> "Fevereiro",
           "C"=> "Março",
           "D" => "Abril",
           "E" => "Maio",
           "F" => "Junho",
           "G" =>"Julho",
           "H" =>"Agosto",
           "I" => "Setembro",
           "J" => "Outubro",
           "k" => "Novembro",
           "l"  =>"Dezembro"
 );

 print_r($meses);


?>