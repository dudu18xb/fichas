<div class="pull-right">
    <a href="home.php?pg=cadpacientebloq"
       class="btn btn-primary" 
       title="Novo Cadastro">
        Novo Cadastro de Usuario
    </a>

    <a href="home.php?pg=listpacientescad"
       class="btn btn-success" title="Listar">
        Cadastro de Pacientes
    </a>
</div>
<?php
//edição dos dados
$id = $nome = $datanasc = "";
//verifica se foi enviado id por get
if (isset($_GET["id"])) {
    $id = trim($_GET["id"]);
    //sql para selecionar o clientes
    $sql = "select * from paciente where id = ? limit 1";
    $consulta = $con->prepare($sql);
    $consulta->bindParam(1, $id);
    $consulta->execute();
    $dados = $consulta->fetch(PDO::FETCH_OBJ);
    //separar os dados
    $id = $dados->id;
    $nome = $dados->nome;
    $datanasc = $dados->datanasc;
}
?>

<div class="col-md-10">
    <div class="row">
        <h1 class="panel-body">Cadastrar de Paciente</h1>
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-body">
                        <form name="form1" method="post" novalidate action="home.php?pg=salvarpaciente">
                            <input type="hidden" name="id"
                                   class="form-control" readonly
                                   value="<?= $id; ?>">
                            <div class="form-group">
                                <h4>Preencha o Nome do Usuário:</h4>
                                <input type="text" required id="nome"
                                       name="nome" class="form-control"
                                       data-validation-required-message="Preencha o nome do Usuário"
                                       placeholder="Preencha o nome do usuáro Ex: João da Silva" value="<?= $nome; ?>">
                            </div>
                            <div class="form-group">
                                <h4>Preencha a Data de Nascimento:</h4>
                                <input name="datanasc" required id="datanasc"
                                       data-validation-required-message="Preencha a Data de Nascimento"
                                       class="form-control"
                                       data-mask="99/99/9999" placeholder="Data de Nascimento" value="<?= $datanasc; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar Dados</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>