<div class="pull-right">
    <a href="home.php?pg=cadbloqueio"
       class="btn btn-danger" 
       title="Novo Cadastro">
        Bloquear Pacientes
    </a>

    <a href="home.php?pg=listpacientesbloqqueado"
       class="btn btn-success" title="Listar">
        Listar Pacientes Bloqueados
    </a>
</div>
<?php
//edição dos dados
$id = $id_paciente = $data_consulta = $data_desbloqueio = "";
//verifica se foi enviado id por get
if (isset($_GET["id"])) {
    $id = trim($_GET["id"]);
    //sql para selecionar a categoria
    $sql = "select * from bloqueio where id = ? limit 1";
    $consulta = $con->prepare($sql);
    $consulta->bindParam(1, $id);
    $consulta->execute();
    $dados = $consulta->fetch(PDO::FETCH_OBJ);
    //separar os dados
    $id = $dados->id;
    $id_paciente = $dados->id_paciente;
    $data_consulta = $dados->data_consulta;
    $data_desbloqueio = $dados->data_desbloqueio;
}
?>
<div class="col-md-10">
    <div class="row">
        <h1 class="panel-body">Cadastrar Usuáro do Sistema</h1>
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-body">
                        <form name="form1" method="post" novalidate action="home.php?pg=salvarpacientesbloqueados">
                            <input type="hidden" name="id"
                                   class="form-control" readonly
                                   value="<?= $id; ?>">
                            <div class="form-group">
                                <h4>Preencha o Login do Usuário:</h4>
                                <select name="id_paciente" required
                                        data-validation-required-message="Selecione o Paciente"
                                        class="form-control"
                                        id="paciente">
                                    <option value=""></option>
                                    <?php
                                    $sql = "select * from paciente order by nome";
                                    $consulta = $con->prepare($sql);
                                    $consulta->execute();
                                    while ($dados = $consulta->fetch(PDO::FETCH_OBJ)) {
                                        $id = $dados->id;
                                        $nome = $dados->nome;
                                        echo "<option value='$id'>$nome</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <h4>Preencha a Data de Nascimento:</h4>
                                <input name="data_consulta" required
                                       data-validation-required-message="Preencha a data da Consulta"
                                       class="form-control"
                                       data-mask="99/99/9999" placeholder="Infome a Data da Consulta" value="<?= $data_consulta; ?>">
                            </div>
                            <div class="form-group">
                                <h4>Preencha a Data de Desbloqueio:</h4>
                                <input name="data_desbloqueio" required
                                       data-validation-required-message="Preencha a data para o Desbloqueio"
                                       class="form-control"
                                       data-mask="99/99/9999" placeholder="Infome a Data para o Desbloqueio" value="<?= $data_desbloqueio; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar Dados</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>