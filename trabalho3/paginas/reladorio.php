<?php 
    include('conf-bootstrap-web.php')
?>
<div>
    <div class="card">
        <div class="card-header">
            <h1>Relátorio</h1>
        </div>
        <div class="card-body">
            <Table class="table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Data_da_Venda</th>
                    <th scope="col">Total_da_Venda</th>
                    <th scope="col">Quantidade_Vendida</th>
                    <th scope="col">ID_Produto</th>
                    <th scope="col">Nome_do_Produto</th>
                    <th scope="col">Preco_de_Venda</th>
                    <th scope="col">Quantidade_em_Estoque</th>
                </tr>
                <?php include('..\action\relatorio.php'); ?>
            </Table>
        </div>
        <div class="card-footer">
            Script by Wemerson henrique @ Direitos reservados
        </div>
    </div>
</div>