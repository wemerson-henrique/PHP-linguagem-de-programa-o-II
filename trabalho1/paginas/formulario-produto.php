<?php 
    include('conf-bootstrap-web.php')
?>
<body>
    <form action="../action/incerir-produto.php" method="post">
        <label for="">Nome do Produto</label>
        <input type="text" name="nome" id="nome" class=""><br>
        <label for="">Preço de Compra</label>
        <input type="number" name="precoDeCompra" id="precoDeCompra"><br>
        <label for="">Preço de Venda</label>
        <input type="number" name="precoDeVenda" id="precoDeVenda"><br>
        <label for="">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade"><br>
        <textarea name="descricao" id="" cols="30" rows="10" placeholder="Digite um descrição"></textarea><br>
        <input type="submit" value="CADASTRAR">
    </form>
</body>