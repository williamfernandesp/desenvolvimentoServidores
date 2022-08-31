<?php

/*
Faça um array que gere 10 numeros aleatorios e verifique quantos são pares,
quanto são impares, quantos são positivos e quantos são negativos.

Utilizando o for imprima a tabuada do 8.

Faça uma função que some todos os impares de 10 e 50 e exiba na tela.

Faça uma função que calcule a porcentagem de um numero.

Gere um array com numeros randomicos (rand(-50,50)) e ordene em ordem crescente.
________________________________________________________________________________
*/

/* Exercicio 1 ------------------------ */
$numeros = array();

for($i = 0; $i < 10; $i++) {
    $aleat = (rand(-50,50));
    array_push($numeros, $aleat);
    if($aleat % 2 == 0 && $aleat < 0){
        echo $numeros[$i]." Seu número é par e negativo.<br>";
    } else if($aleat % 2 != 0 && $aleat < 0){
        echo $numeros[$i]." Seu número é ímpar e negativo.<br>";
    } else if($aleat % 2 == 0 && $aleat >= 0){
        echo $numeros[$i]." Seu número é par e positivo.<br>";
    } else {
        echo $numeros[$i]." Seu número é ímpar e positivo.<br>";
    }
}

echo "<br>";
print_r($numeros);
echo "<br>";
echo "<br>";

/* Exercicio 2 ---------------------- */

for($i = 0; $i <= 10; $i++) {
    $operador = 8;
    echo $operador."x".$i."=".$operador*$i."<br>";
}

echo "<br>";

/* Exercicio 3 ---------------------- */

function ImprimirImpares($inicial,$final) {
    $soma = 0;
    for($i = $inicial; $i <= $final; $i++){
        if($i % 2 == 1){
            $soma+= $i;
        }
    }
    echo $soma."<br>";
}

ImprimirImpares(1,10);

/* Exercicio 4 ---------------------- */

function porcentagem($numero, $porcentagem) {
    echo $porcentagem."% de ".$numero." é ".(($numero/100)*$porcentagem);
}
porcentagem(100,25);

echo "<br>";
echo "<br>";

/* Exercicio 5 ---------------------- */

function ImprimeArray($array) {
    echo "<p>";
    for($i = 0;$i < count($array); $i++) {
        echo "<br> Indice ".$i." Valor ".$array[$i]; "<br>";
    }
    echo "<p>";
}

function GerarArrayAleatorio($qtsIndices){
    $array = array();
    for($i = 0; $i <= $qtsIndices; $i++){
        array_push($array, rand(-50,50));
    }
    return $array;
}

$novo_array = GerarArrayAleatorio(50);
print_r($novo_array);

function OrdenacaoCrescente($array) {

    $tamanho = count($array)-1;
    $auxiliar = 0;

    for($i = 0; $i< $tamanho; $i++) {
        for ($j=0; $j < $tamanho - $i; $j++) {
            
            if ($array[$j] > $array[$j + 1]) {
                $auxiliar = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $auxiliar;
            }
            
        }
    }
    return $array;
}

$arrayOrdenado = OrdenacaoCrescente($novo_array);
echo "<br>depois de ordenar<br>"; ImprimeArray($arrayOrdenado);
?>