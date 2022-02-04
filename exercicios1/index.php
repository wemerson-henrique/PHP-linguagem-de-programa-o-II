
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $diretorio_exercicios1 = getcwd();
        $nomes_questoes = scandir($diretorio_exercicios1);
        for($i = 0; $i < count($nomes_questoes); $i++){
            $nome_pasta = strval($nomes_questoes[$i]);
            echo "$nome_pasta<br>";
            $date = $nome_pasta;
            echo "<a href='" . htmlspecialchars("/exercicios1/" .urlencode($data)) . "'>\n";
        }
        <form action="index.php" method="post">
        t
        </form>
    ?>
</body>
</html>
<?php

?>