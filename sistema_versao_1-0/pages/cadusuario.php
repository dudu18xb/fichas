<div class="pull-right">
    <a href="home.php?pg=cadusuario"
       class="btn btn-primary" 
       title="Novo Cadastro">
        Novo Cadastro de Usuario
    </a>

    <a href="home.php?pg=listausuario"
       class="btn btn-success" title="Listar">
        Visualizar Lista de Usuarios
    </a>
</div>
<?php
//edição dos dados
$id = $login = $nome = $senha = "";
//verifica se foi enviado id por get
if (isset($_GET["id"])) {
    $id = trim($_GET["id"]);
    //sql para selecionar o clientes
    $sql = "select * from admin where id = ? limit 1";
    $consulta = $con->prepare($sql);
    $consulta->bindParam(1, $id);
    $consulta->execute();
    $dados = $consulta->fetch(PDO::FETCH_OBJ);
    //separar os dados
    $id = $dados->id;
    $login = $dados->login;
    $nome = $dados->nome;
    $senha = $dados->senha;
}
?>

<div class="col-md-10">
    <div class="row">
        <h1 class="panel-body">Cadastrar Usuáro do Sistema</h1>
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-body">
                        <form name="form1" method="post" novalidate action="home.php?pg=saveusuario">
                            <input type="hidden" name="id"
                                   class="form-control" readonly
                                   value="<?= $id; ?>">
                            <div class="form-group">
                                <h4>Preencha o Login do Usuário:</h4>
                                <input type="text" required id="login"
                                       name="login" class="form-control" value="<?= $login; ?>"
                                       data-validation-required-message="Preencha o Login do Usuárop"
                                       placeholder="Preencha o Login ex: maria">
                            </div>
                            <div class="form-group">
                                <h4>Preencha o Nome do Usuário:</h4>
                                <input type="text" required id="nome"
                                       name="nome" class="form-control"
                                       data-validation-required-message="Preencha o nome do Usuário"
                                       placeholder="Preencha o nome do usuáro Ex: João da Silva" value="<?= $nome; ?>">
                            </div>
                            <div class="form-group">
                                <h4>Preencha uma senha para o Usuáro:</h4>
                                <input type="password" required id="senha"
                                       name="senha" class="form-control"
                                       data-validation-required-message="Digite uma Senha"
                                       placeholder="Preencha uma senha" value="<?= $senha; ?>">
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar Dados</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>