<?php
    #Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. Se o valor da soma for negativo o método deverá retornar o valor 0. *

    function soma($valor1, $valor2){
        $soma = $valor1 + $valor2;
        if($soma < 0){
            return 0;
        }
        else {
            return $soma;
        }
    }
    echo soma($_POST['valor1'],$_POST['valor2']);
?>