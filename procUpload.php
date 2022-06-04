<?php
  
  // variavel super global

  // post, get, request, file

  /*
     Array de informações 
     name ;
     type;
     size;
     error;
     tmp_name;
     full_path
     */

     //var_dump ( $_FILES["arq"]);

     /*echo "nome :" .$_FILES["arq"]["name"] ."<br>";
     echo "tipo :" .$_FILES["arq"]["type"] ."<br>";
     echo "tamanho :" .$_FILES["arq"]["size"] ."<br>";
     echo "error :" .$_FILES["arq"]["error"] ."<br>"; // 0 ate 8(exceto 5);
     echo "diretorio temporario :" .$_FILES["arq"]["tmp_name"] ."<br>";*/
     
     $extensao = $_FILES["arq"]["type"];
     // arquivo temporario diretorio
     $tmp = $_FILES["arq"]["tmp_name"] ;
     // destino do arquivo no site a ser definitivo
     $arq =  "./pasta-teste/".$_FILES["arq"]["name"] ;

     if($extensao == "image/jpeg" || $extensao == "image/png") {
      if( move_uploaded_file( $tmp, $arq )){
        echo "arquivo enviado com sucesso para o servidor!!";
      }
     }else {
       echo "<h1>O arquivo não pode ser enviado para o servidor. Por favor insira uma imagem JPG/JPEG.<h1>";
       echo "<a href='./Upload.php'>Tentar novamente<a>";
     }

     

?>