<?php
    require '..\classes\conf-banco-de-dados.php';
    require '..\classes\logar-class.php';

    $dadosRecebidos = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dadosRecebidos['SendCaduser'])) {
        $login1 = new loginUsuario();
        $login1->dadosRecebidos = $dadosRecebidos;
        $resultado_login1 = $login1->logar();
        if (!empty($resultado_login1)) {
            echo '<script language="javascript">alert("Logado com sucesso!");</script>';
        } else {
            echo '<script language="javascript">alert("Erro: usuario ou senha incorreto!");</script>';
        }
        
    } else {
        echo '<script language="javascript">alert("EPreencha com seus dados");</script>';
    }
    

    
?>