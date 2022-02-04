<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if($numero1 > $numero2){
        echo "O $numero1 é maior que $numero2";
    }elseif ($numero1 < $numero2) {
        echo "O $numero1 é menor que $numero2";
    }else {
        echo"ERRO:  numero $numero1 é o mesmo que $numero2 então não existe maior ou menor";
    }
?>
