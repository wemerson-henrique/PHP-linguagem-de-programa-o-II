<?php
    require '../classes/conf-banco-de-dados.php';
    require '../classes/produto-class.php';

    $dadosRecebidos = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (!empty($dadosRecebidos['SendCaduser'])) {
        $produto = new Produto();
        $produto->dadosRecebidos = $dadosRecebidos;
        $valor = $produto->cadastrar();
        if ($valor) {
            echo '<script language="javascript">alert("Usuario cadastrado com sucesso!");</script>';
            
        }else {
            echo '<script language="javascript">alert("ERRO: Usuário não cadastrado!");</script>';
        }
    }else{
        echo '<script language="javascript">alert("Formulario vazio!<br>Fassa seu preenchimento por favor.");</script>';
    }
?>