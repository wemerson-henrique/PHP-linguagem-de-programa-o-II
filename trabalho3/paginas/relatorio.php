<?php 
    include('conf-bootstrap-web.php');
    include_once('..\action\verificar-sessao.php');
    include_once('..\paginas\menu.php');
?>
<link rel="stylesheet" href="../css/style.css">
<div>
    <div class="card">
        <div class="card-header">
            <h1>Relátorio</h1>
        </div>
        <div class="card-body">
            <Table class="table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Data da Venda</th>
                    <th scope="col">Total da Venda</th>
                    <th scope="col">Quantidade Vendida</th>
                    <th scope="col">ID Produto</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Preco de Venda</th>
                    <th scope="col">Quantidade em Estoque</th>
                </tr>
                <?php include('..\action\relatorio.php'); ?>
            </Table>
        </div>
    </div>
</div>
<?php include_once('..\paginas\footer.php'); ?>