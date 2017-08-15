<?php
//edição dos dados
$id = $nome = $numero = $data = "";
//verifica se foi enviado id por get
if (isset($_GET["id"])) {
    $id = trim($_GET["id"]);
    //sql para selecionar o clientes
    $sql = "select *, date_format(data,'%d/%m/%Y') data from ficha_medica where id = ? limit 1";
    $consulta = $con->prepare($sql);
    $consulta->bindParam(1, $id);
    $consulta->execute();
    $dados = $consulta->fetch(PDO::FETCH_OBJ);
    //separar os dados
    $id = $dados->id;
    $nome = $dados->nome;
    $numero = $dados->numero;
    $data = $dados->data;
}
?>
<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title"><h3>Cadastro de Fichas - Pacientes Médicos</h3></div>
                    <div class="panel-body">
                        <form name="form1" method="post" novalidate action="home.php?pg=savem">
                            <input type="hidden" name="id"
                                   class="form-control" readonly
                                   value="<?= $id; ?>">
                            <div class="form-group">
                                <input type="text" required id="nome"
                                       name="nome" class="form-control" value="<?= $nome; ?>"
                                       data-validation-required-message="Preencha o nome do Cliente"
                                       placeholder="Preenche o Nome Completo do Cliente ex: João da Silva" style="text-transform:uppercase">
                            </div>

                            <div class="form-group">
                                <input type="text" required id="numero"
                                       name="numero" class="form-control"
                                       data-validation-required-message="Preencha o Número de Ficha"
                                       placeholder="Preencha o Número de Ficha" value="<?= $numero; ?>" style="text-transform:uppercase">
                            </div>

                            <div class="form-group">
                                <input name="data" required
                                       data-validation-required-message="Preencha a Data de Nascimento"
                                       class="form-control"
                                       data-mask="99/99/9999" placeholder="DATA DE NASCIMENTO" value="<?= $data; ?>">
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>