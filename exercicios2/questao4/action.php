<?php
    #Crie uma função que receba um número inteiro e retorne a soma dos seus algarismos. *

    function somaAlgarismo($numero){
        $algarismos = chunk_split($numero);
        $soma = 0;
        for ($i=0; $i <strlen($algarismos); $i++) { 
            $soma = $soma + intval($algarismos[$i]);
        }
        return $soma;
    }
    echo somaAlgarismo($_POST['numero']);
?>
