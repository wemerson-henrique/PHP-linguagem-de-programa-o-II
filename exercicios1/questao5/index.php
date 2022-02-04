
<?php
    /*
    5) Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada. Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado] *
    */  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao05</title>
</head>
<body>
    <form action="action.php" method="post">
        <p>
            <p>Escreva as tres notas do aluno</p>
            <label for="">Nota 1</label>
            <input type="number" name="nota1" id=""><br>
            <label for="">Nota 2</label>
            <input type="number" name="nota2" id=""><br>
            <label for="">Nota 3</label>
            <input type="number" name="nota3" id=""><br>
        </p>
        <input type="submit" value="SUBMETER">
    </form>
</body>
</html>