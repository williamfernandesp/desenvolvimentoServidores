<?php
// Iniciando um array em branco na variavel

$lista = array("Will");
//echo $lista[0];
//echo $lista[0] não funcionará;
// Não existe dados no indice 0;

$nomes = array("Will", "Vitoria", "Denise", "Mateus", "Guilherme", "Roge", "Virlene");
//           indice 0, indice 1, indice 2, indice 3, indice 4,   indice 5, indice 6

echo $nomes[0]."<br>";
echo $nomes[1]."<br>";
echo $nomes[2]."<br>";
echo $nomes[3]."<br>";
echo $nomes[4]."<br>";
echo $nomes[5]."<br>";
echo $nomes[6]."<br>";

echo "<br>";

for ($i = 0; $i < count($nomes); $i++) {
        //echo $nomes[$i]."<br>";
    }

$dados = array();
$dados["Nome"] = array("Will", "Maria", "João");
$dados["Idade"] = array(30, 18, 25);
$dados["solteiro"] = array(true, false, false);

for($i = 0; $i < 10; $i++){
    array_push($dados["Idade"], $i);
}

echo "<pre>";
var_dump($dados);
echo "</pre>";
$dados[1] = "Will está no indice 1";
echo $dados[1];

echo "<pre>";
var_dump($dados);
echo "</pre>";

/*
$_POST["Senha"];
$_GET["Id"];
$_COOKIE["Carrinho"];
$_SESSION;
$_FILES;
*/

?>