<?php
    include('conf-banco.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $username = $_POST['username'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $sql = mysqli_query ($conexao, "INSERT INTO usuario (nome,cpf,telefone,username,senha,email) values ('$nome','$cpf','$telefone','$username','$senha','$email')") or die("Erro");

    echo "conectado com sucesso!";
?>
