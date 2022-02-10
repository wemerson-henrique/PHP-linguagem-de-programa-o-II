<?php
    #Crie uma função que verifique se um número é primo (deverá retornar um valor booleano). *

    function primo($numero){
        $cont = 0;
        for ($i=$numero; $i > 0; $i--) { 
            $resto = $numero % $i;
            if ($resto == 0) {
                $cont = $cont+1;
            }
        }
        if ($cont==2 || $cont==1) {
            return TRUE;
        }else {
            return FALSE;
        }
    }
    $resposta = primo($_POST['numero']);
    if ($resposta == TRUE) {
        echo "TRUE";
    }elseif ($resposta == FALSE) {
        echo "FALSE";
    }
?>