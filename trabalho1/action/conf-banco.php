<?PHP

    $conexao = mysqli_connect('localhost','root','');
    $banco = mysqli_select_db($conexao, 'trabalho1');
    mysqli_set_charset($conexao,'utf8');

?>