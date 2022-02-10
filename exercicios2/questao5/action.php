<?php
    #Crie uma função que receba dois valores inteiros como argumentos e retorne um valor booleano indicando se os números são divisíveis. *

    function divisiveis($valor1, $valor2){
        $resto = $valor1 % $valor2;
        if ($resto == 0) {
            return TRUE;
        }else {
            return FALSE;
        }
    }
    $resposta = divisiveis($_POST['valor1'],$_POST['valor2']);
    if ($resposta == TRUE) {
        echo "TRUE";
    }elseif ($resposta == FALSE) {
        echo "FALSE";
    }
    
?>