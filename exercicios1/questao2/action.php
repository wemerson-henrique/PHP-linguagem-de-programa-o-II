<?php
    $numero = $_POST['numero'];
    $resposta= 1;
    for ($i = $numero; $i > 0; $i--){
        $resposta = $resposta * $i;
    }
    echo "O fatorial de $numero é $resposta<br>";
    echo "$numero! = $resposta<br>";
?>
