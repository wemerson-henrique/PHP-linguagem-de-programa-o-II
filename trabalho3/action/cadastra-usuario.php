<?php
    require '..\classes\conf-banco-de-dados.php';
    require '..\classes\user-class.php';

    $dadosRecebidos = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $veruser = new Usuario();
    $veruser->dadosRecebidos = $dadosRecebidos;
    $veru = $veruser->username();
    if($veru){
        echo '<script language="javascript">alert("Nome de usuario existente");</script>';
        echo "nome ja existe";
    }elseif (!empty($dadosRecebidos['SendCaduser'])) {
        $cadUser = new Usuario();
        $cadUser->dadosRecebidos = $dadosRecebidos;
        $valor = $cadUser->cadastrar();
        if ($valor) {
            echo '<script language="javascript">alert("Usuario cadastrado com sucesso!");</script>';
            header('Location:..\paginas\relatorio.php');
        }else {
            echo '<script language="javascript">alert("ERRO: Usuário não cadastrado!");</script>';
        }
    }
?>