<?php
    // exercicio1
    echo "<h1>Exercício 1</h1><br>";
    echo "<ul>";

        for ($numero = 1; $numero <= 10 ; $numero++) { 
            echo "<li>" . $numero . "</li><br>";
        }

        $numero = 1;
        /*while ($numero <= 10) {
            echo "<li>" . $numero . "</li><br>";
            $numero++;
        }*/


       /* do {
            echo "<li>" . $numero . "</li><br>";
            $numero++;
        } while ($numero <= 10);*/

    echo "</ul>";


    echo "<hr><br>";

    //exercicio2
    echo "<h1>Exercício 2</h1><br>";
    echo "<ul>";

        /*for ($numero = 10; $numero >= 1 ; $numero--) { 
            echo "<li>" . $numero . "</li><br>";
        }*/

        $numero = 10;
        /*while ($numero >= 1) {
            echo "<li>" . $numero . "</li><br>";
            $numero--;
        }*/

         do {
            echo "<li>" . $numero . "</li><br>";
            $numero--;
        } while ($numero >= 1);


    echo "</ul>";

    echo "<hr><br>";

    //exercicio3
    echo "<h1>Exercício 3</h1><br>";
    $notasAlunos = array(8,5,6,7,1,9,0,5,6,4,8,5,6,7,1,9,0,5,6,4);
    $mediaNotas = (int)(array_sum($notasAlunos) / count($notasAlunos));
    $alunosReprovados = array(0,1,2,3,4);
    $alunosAprovados = array_diff($notasAlunos, $alunosReprovados);
    $quantAprovados = count($alunosAprovados);

    echo "<h3>Notas</h3>";
    foreach ($notasAlunos as $aluno => $nota) {
        $idAluno = $aluno + 1;
        echo "A nota do aluno " . $idAluno . " foi $nota</br>";
    }

    echo "<br>A média final foi $mediaNotas, portanto $quantAprovados alunos foram aprovados.";

    
?>