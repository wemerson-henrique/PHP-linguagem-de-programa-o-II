<?php 
    include('conf-bootstrap-web.php');
    require ('../classes/conf-banco-de-dados.php');
    require ('../classes/produto-class.php');
    include_once('..\paginas\menu.php');
    include_once('..\action\verificar-sessao.php');
    
?>
<link rel="stylesheet" href="../css/style.css">

<body>
    <div class="card">
        <div class="card-header">
            <h2>Shop</h2>
        </div>
        <div class="card-body">
            <form action="..\action\venda-produto.php" method="post" class="p-4">
                <div class="row">
                    <div class="col-3">
                        <label for="">Produto:</label>
                    </div>
                    <div class="col-6">
                        <select class="form-select" name="idProduto">
                        <?php $produto = new Produto();
                            $listaDeProdutos = $produto->listar();
                            foreach ($listaDeProdutos as $row_produto) {
                                extract($row_produto);
                                echo "<option value=". $ID .">". $Nome ." / R$ ". $Preco_De_Venda .",0</option>";
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <label for="">Quantidade:</label>
                    </div>
                    <div class="col-6">
                        <input class="form-control mt-2" type="number" name="quantidade" id="quantidade">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <label for="">Data da compra</label>
                    </div>
                    <div class="col-6">
                        <input class="form-control mt-2" type="date" name="dataDaVenda" id="dataDaVenda">
                    </div>
                </div>
                <input class="btn btn-info" type="submit" name="SendCaduser" value="COMPRAR">
            </form>
        </div>
    </div>
</body>
<?php include_once('..\paginas\footer.php'); ?>