<?php

if (isset($_GET["id"])) {
    // verifica se existe um banner engine cadastrado
    $id = trim($_GET["id"]);
    $sql = "select * from bloqueio where id = ? limit 1";
    $consulta = $con->prepare($sql);
    $consulta->bindParam(1, $id);
    $consulta->execute();
    $dados = $consulta->fetch(PDO::FETCH_OBJ);
    // separando os dados
    $id = $dados->id;
    $id_paciente = $dados->id_paciente;
    $data_consulta = $dados->data_consulta;
    $data_desbloqueio = $dados->data_desbloqueio;

    if (!empty($dados->nome)) {
        $sql = "delete from bloqueio where id = ? limit 1";
        $consulta = $con->prepare($sql);
        $consulta->bindParam(1, $id);
        if ($consulta->execute()) {
            //executou
            echo "<div class='alert alert-success'>Registro Excluído com Sucesso
					</div>";
        } else {
            //erro
            echo "<div class='alert alert-danger' style='text-align: center;'><p>Erro ao Excluir " . $consulta->errorInfo()[2] . "</p><br><h3 style='text-align: center;'>Cliente tem Algum Cadastro Ativo !!!</h3></div>";
        }
        //incluir a listagem novamente
        include "listpacientesbloqqueado.php";
    } else {
        echo "<div class='alert alert-danger'>O registro não pode ser excluído pois existe "
        . " uma foto com esta categoria </div>";
    }
} else {
    echo "Erro ao excluir";
}