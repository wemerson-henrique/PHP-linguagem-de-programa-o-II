<?php
    require '../classes/conf-banco-de-dados.php';
    require '../classes/produto-class.php';
    require '../classes/venda-class.php';

    $dadosRecebidos = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (!empty($dadosRecebidos['SendCaduser'])) {
        $produto = new Produto();
        $produto->dadosRecebidos = $dadosRecebidos;
        $validarVenda = $produto->VerificarDisponibilidade();
        if ($validarVenda) {
            $validarCompra = $produto->atualizarEstoque();
            if ($validarCompra) {
                $venda = new Venda();
                $venda->dadosRecebidos = $dadosRecebidos;
                $confirmaVenda = $venda->RealizarVenda();
                if ($confirmaVenda) {
                    echo '<script language="javascript">alert("Compra feita com sucesso!");</script>';
                } else {
                    echo '<script language="javascript">alert("ERRO: Houve um erro ao realizar a compra.");</script>';
                }
            } else {
                echo '<script language="javascript">alert("ERRO: Ao realizar compra tente mais tarde!");</script>';
            }
        } else {
            echo '<script language="javascript">alert("Produto esgotado. Espere o estoque ser reabastecido!");</script>';
        }
    }else{
        echo '<script language="javascript">alert("Formulario vazio! Fassa seu preenchimento por favor.");</script>';
    }
?>