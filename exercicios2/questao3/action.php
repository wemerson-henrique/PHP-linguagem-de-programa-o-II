<?php
    #Crie uma função ContaPrimos() que receba dois valores inteiros como argumentos e retorne o númerode números primos entre estes dois números, inclusive. *

    function primo($valor1, $valor2){
        if ($valor1 > $valor2) {
            $maior = $valor1;
            $menor = $valor2;
        }else {
            $maior = $valor2;
            $menor = $valor1;
        }
        for ($i=$maior-1; $i > $menor; $i--) {
            $cont = 0;
            for ($j=$i; $j > 0; $j--) { 
                $resp = $i % $j;
                if ($resp == 0) {
                    $cont = $cont+1;
                }
            }
            if ($cont == 2 || $cont == 1) {
                echo "$i é primo<br>";
            }
        }
    }

    primo($_POST['valor1'],$_POST['valor2']);

?>