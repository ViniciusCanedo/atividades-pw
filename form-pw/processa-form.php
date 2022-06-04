<?php

    // Variáveis de Formulário
    $nome = $_POST["nome"];
    $cep = $_POST["cep"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];

    // Variáveis de Arquivo
    $nomeImagem = $_FILES["foto"]["name"];
    $tipoImagem = $_FILES["foto"]["type"];
    $dirTemporario = $_FILES["foto"]["tmp_name"];
    $dirMove = "images/" . $nomeImagem; 

    if($tipoImagem == "image/jpeg" || $tipoImagem == "image/png") {
        if( move_uploaded_file( $dirTemporario, $dirMove )){
            include_once 'includes/header.php';

            echo("
            <section class='mt-5 container mb-5'>
                <div class='d-grid justify-content-center align-items-center'>
                    <div style='width: 200px; height: 200px; background: url(images/$nomeImagem) no-repeat center;background-size: cover; border-radius: 50%;'>
                    </div>
                    <h1>$nome</h1>
                </div>
                <h3 class='mt-3'>Endereço</h3>
                <hr>
                <div>
                    <h5>CEP: $cep<h5>
                    <h5>Estado: $estado<h5>
                    <h5>Cidade: $cidade<h5>
                    <h5>Bairro: $bairro<h5>
                    <h5>Logradouro: $logradouro<h5>
                    <h5>Número: $numero<h5>
                    <h5>Complemento: $complemento<h5>
                </div>
            </section>
            ");

            include_once 'includes/footer.php';
        }
       }else {
            include_once 'includes/header.php';

            include_once 'includes/erro.php';

            include_once 'includes/footer.php';
       }


?>