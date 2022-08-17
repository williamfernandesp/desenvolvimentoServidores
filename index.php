<?php

    // echo "<style>body{background-color:red}</style>";
    
    /*
    echo "Meu nome é William";
    echo "<h1>Função Nativa Echo</h1>";
    echo "Bem vindo";

    echo "<h4>Calcúlo de Média</h4>";
    $nota1 = 6;
    $nota2 = 1;
    $texto = "Minha média é: ";
    $resultado = ($nota1 + $nota2)/2;


    $texto = $texto.$resultado;
    echo $texto;

    if($resultado >= 6) {
        echo " Aprovado";
    }
    else if($resultado < 6 && $resultado >=2){
        echo " Tem chance de recuperar<br>";
    } else {
        echo " Reprovado, perdido";
    }

    //Este é um comentário

    
    Bloco de comentário
    
    

     $contadora = 0;
    do{
        echo "<br>Teste".$contadora;
        $contadora ++;
    } while ($contadora < 10);

    echo "<br><br>While:<br>";
    while($contadora < 150) {
        if($contadora % 2 == 0) {
            echo $contadora."É um número Par<br>";
        } else {
            echo $contadora."É um número impar<br>";
        }
        $contadora++;
    }

    for($i = 0; $i < 1550; $i++){
        echo $i."<br>";
    }

    */

    echo "<table>";
        echo "<table border='5'>";
    for ($i=0; $i < 25 ; $i++) {
        echo "<tr>";
        echo "<td>Nome ".$i."</td>";
        echo "<td>Idade ".$i."</td>";
        echo "</tr>";
    }

    echo "</table>";

?>