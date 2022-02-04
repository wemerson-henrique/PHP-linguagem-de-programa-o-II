<?php
    $numeros = [];
    $numeros[] = $_POST['numero1'];
    $numeros[] = $_POST['numero2'];
    sort($numeros);
    for($i = 0; $i < count($numeros); $i++){
        echo "  $numeros[$i]  ";
    }
    #var_dump($numeros);#comando para mstrar array
?>
