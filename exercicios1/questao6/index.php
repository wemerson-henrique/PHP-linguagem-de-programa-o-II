
<?php
    /*
    6) Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos. 
    */  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao01</title>
</head>
<body>
    <form action="action.php" method="post">
        <p>
            <p>Escreva sus dados</p>
            <label for="">Nome</label>
            <input type="text" name="nome" id=""><br>
            <label for="">Idade</label>
            <input type="number" name="idade" id="">
        </p>
        <input type="submit" value="SUBMETER">
    </form>
</body>
</html>