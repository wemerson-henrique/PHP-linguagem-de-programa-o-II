<?php
    require_once('..\classes\conf-banco-de-dados.php');
    require_once('..\classes\venda-class.php');
    require_once('..\paginas\conf-bootstrap-web.php');

    $venda = new Venda;
    $vendas = $venda->Listar();

    foreach ($vendas as $itens) {
        extract($itens);
        echo "
            <tr>
                <td scope='row'>$ID</td>
                <td>$Data_da_Venda</td>
                <td>R$ $Total_da_Venda,00</td>
                <td>$Quantidade_Vendida</td>
                <td>$ID_Produto</td>
                <td>$Nome_do_Produto</td>
                <td>R$ $Preco_de_Venda,00</td>
                <td>$Quantidade_em_Estoque</td>
            </tr>
        ";
    }
?>
