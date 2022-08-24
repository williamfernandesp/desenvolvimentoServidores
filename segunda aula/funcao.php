<?php
    function nomeFuncao() {

        if(true) {
            echo "Funcionando a função";
        } else {
            echo "Nunca vai cair aqui";
        }

    }

    function Adicao($num1, $num2) {
        $soma = $num1 + $num2;
        return $soma;
    }

    function Subtracao($num1, $num2) {
        $resultado = $num1 - $num2;
        return $resultado;
    }

    function Multiplicacao($num1, $num2) {
        $resultado = $num1 * $num2;
        return $resultado;
    }

    function Divisao($num1, $num2) {
        $resultado = $num1 / $num2;
        return $resultado;
    }

    function Media($num1, $num2) {
        $resultado = ($num1 + $num2) / 2;
        return $resultado;
    }

    function SomaArray($array) {
        $retorno = 0;
        for($i = 0; $i < count($array); $i++) {
            $retorno += $array[$i];
        }
        return $retorno;
    }

    function MediaArray($array) {
        $soma = SomaArray($array);
        return $soma/count($array);
    }

    /*
    function LendariaCalculadora($num1, $num2, $operacao) {
        if($operacao == "+") {
            return Adicao($num1,$num2);
        }
        else if($operacao == "-") {
            return Subtracao($num1,$num2);
        }
        else if($operacao == "*") {
            return Multiplicacao($num1,$num2);
        }
        else if($operacao == "/") {
            return Divisao($num1,$num2);
        } else {
            echo "Digite uma operação válida";
        }
    }
    */

    //nomeFuncao();
    /*
    $valor1 = 65647;
    $resultado = Adicao(512, $valor1);
    echo "1º Adição". Adicao(273642, 3457465);
    echo "2º Adição". Adicao(234, 465);
    echo "3º Adição". Adicao(2, 90);
    echo "4º Adição". Adicao(34, 1);
    echo "5º Adição". Adicao(23, 67);
    echo "O resultado da soma é: ".$resultado;
    */

    //$numeros = array(1, 5, 10, 15, 20, 25);
    //echo SomaArray($numeros);

    /*
    echo "<br>".LendariaCalculadora(8, 6, "*");
    echo "<br>".LendariaCalculadora(8, 6, "-");
    echo "<br>".LendariaCalculadora(8, 6, "+");
    echo "<br>".LendariaCalculadora(8, 6, "/")."<br>";
    echo "<br>".LendariaCalculadora(8, 6, "erro");
    */

    function LendariaCalculadora($num1, $num2, $operacao) {
        if($operacao == "+") {
            echo "<br>".Adicao($num1,$num2);
        }
        else if($operacao == "-") {
            echo "<br>".Subtracao($num1,$num2);
        }
        else if($operacao == "*") {
            echo "<br>".Multiplicacao($num1,$num2);
        }
        else if($operacao == "/") {
            echo "<br>".Divisao($num1,$num2);
        } 
        else if($operacao == "Média") {
            echo "<br>".Media($num1,$num2);
        }
        else {
            echo "<br>Digite uma operação válida";
        }
    }

    LendariaCalculadora(3, 4, "+");
    LendariaCalculadora(8, 6, "-");
    LendariaCalculadora(8, 6, "*");
    LendariaCalculadora(8, 6, "/");
    LendariaCalculadora(8, 6, "erro");
    LendariaCalculadora(8, 6, "Média");

?>