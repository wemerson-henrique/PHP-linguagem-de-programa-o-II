<?php
    $notas = [];
    $notas[] = $_POST['nota1'];
    $notas[] = $_POST['nota2'];
    $notas[] = $_POST['nota3'];
    $somatoria_notas = 0;
    for ($i = 0; $i < count($notas); $i++) { 
        $somatoria_notas = $notas[$i] + $somatoria_notas;
    }
    $media = $somatoria_notas / count($notas);
    if ($media >= 6) {
        echo "<p>Sua média é $media <span style='color:green;font-size: 20px;'>aprovado</h1></span>";
    }else {
        echo "<p>Sua média é $media <span style='color:red;font-size: 20px;'>reprovado</div></span>";
    }
?>