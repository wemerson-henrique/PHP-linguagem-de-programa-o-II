<?php
    include('conf-banco.php');

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $precoDeCompra = $_POST['precoDeCompra'];
    $precoDeVenda = $_POST['precoDeVenda'];
    $quantidade = $_POST['quantidade'];

    $sql = mysqli_query ($conexao, "INSERT INTO produto (nome,descricao,precoDeCompra,precoDeVenda,quantidade) values ('$nome','$descricao','$precoDeCompra','$precoDeVenda','$quantidade')") or die("Erro");

    echo "conectado com sucesso!";
?>