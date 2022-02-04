<?php
    $nome = ucfirst($_POST['nome']);
    $idade = $_POST['idade'];
    if ($idade > 18) {
        echo "$nome é maior de 18 e tem $idade Anos.";
    }elseif ($idade < 18) {
        echo "$nome não é maior de 18 e tem $idade Anos.";
    }else {
        echo "$nome tem exatamente $idade Anos.";
    }
?>