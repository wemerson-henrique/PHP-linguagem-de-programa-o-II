<?php include_once('conf-bootstrap-web.php'); ?>
<link rel="stylesheet" href="..\css\style-login.css">
<div class="card">
    <form action="..\action\logar-usuario.php" method="post">
        <input type="text" name="userName" id="userName"><br>
        <input type="password" name="userSenha" id="userSenha"><br>
        <input class="btn btn-primary" name="SendCaduser" type="submit" value="LOGAR">
        <p>Caso não tenha acesso click <a href="..\paginas\formulario-usuario.php">aqui</a>.</p>
    </form>
</div>