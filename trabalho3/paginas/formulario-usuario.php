<?php 
    include('conf-bootstrap-web.php');
    include_once('..\paginas\menu.php');
?>
<link rel="stylesheet" href="../css/style.css">
<body>
    <div class="card">
        <div class="card-header">
            <h2>Cadastro de Usuário</h2>
        </div>
        <div class="card-body">
            <form name = "Caduser" action="..\action\cadastra-usuario.php" method="post" class="p-4">
                <div class="row mb-4">
                    <label for="" class="col-sm-3 col-form-label">Nome Completo</label>
                    <div class="col-sm-9">
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>
                </div>
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <label for="">CPF</label>
                        <input class="form-control mt-2" type="text" name="cpf" id="cpf">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Telefone</label>
                        <input class="form-control mt-2" type="tel" name="telefone" id="telefone">
                    </div>
                </div>
                <hr>
                <div class="row mb-4">
                    <label for="" class="col-sm-3 col-form-label">Nome de Usuário</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="usuario" id="usuario">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="" class="col-sm-3 col-form-label">Senha</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="password" name="senha" id="senha">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                </div>
                <input name="SendCaduser" class="btn btn-success btn-lg mx-auto" type="submit" value="CADASTRAR">
            </form>
        </div>
    </div>
</body>
<?php include_once('..\paginas\footer.php'); ?>