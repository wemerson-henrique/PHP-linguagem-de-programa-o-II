<?php 
    include('conf-bootstrap-web.php')
?>
<link rel="stylesheet" href="../css/style.css">
<body>
    <div class="card">
    <div class="card-header">
            <h2>Cadastro de Produto</h2>
        </div>
        <div class="card-body">
            <form action="../action/incerir-produto.php" method="post" class="p-4">
                <div class="row mb-4">
                    <label for="" class="col-sm-3 col-form-label">Nome do Produto</label>
                    <div class="col-sm-9">
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-sm-4">
                        <label for="">Preço de Compra</label>
                        <input type="number" name="precoDeCompra" id="precoDeCompra" class="form-control mt-2">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Preço de Venda</label>
                        <input type="number" name="precoDeVenda" id="precoDeVenda" class="form-control mt-2">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Quantidade</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control mt-2">
                    </div>
                </div>
                <textarea name="descricao" id="" cols="30" rows="10" placeholder="Digite um descrição..." class="col-sm-12 form-control mb-4"></textarea>
                <input type="submit" class="btn btn-success btn-lg mx-auto" value="CADASTRAR">
            </form>
        </div>
    </div>
</body>