<?php
    $numero = $_POST['numero'];
    echo "<table>";
    for ($i=0; $i < 10; $i++){
        $resposta = $numero * $i;
        echo "
        
            <tr>
                <td>
                    $resposta X $i
                </td>
                <td> = </td>
                <td>
                    $resposta
                </td>
            </tr>"
        ;
    }
    echo "</table>";
?>
