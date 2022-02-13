<?php 
    include('conf-bootstrap-web.php')
?>
<body>
    <form action="../action/incerir-usuario.php" method="post">
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" class=""><br>
        <label for="">CPF</label>
        <input type="text" name="cpf" id="cpf"><br>
        <label for="">Telefone</label>
        <input type="tel" name="telefone" id="telefone"><br>
        <label for="">Nome de Usuário</label>
        <input type="text" name="username" id="username"><br>
        <label for="">Senha</label>
        <input type="password" name="senha" id="senha"><br>
        <label for="">Email</label>
        <input type="email" name="email" id="email"><br>
        <label for=""></label>
        <input type="submit" value="CADASTRAR">
    </form>
</body>