<?php

//verificar se foi dado post
if ($_POST) {
    //se foi - salvar/alterar
    //recuperar os dados enviados
    $id = trim($_POST["id"]);
    $id_paciente = trim($_POST["id_paciente"]);
    $data_consulta = trim($_POST["data_consulta"]);
    $data_desbloqueio = trim($_POST["data_desbloqueio"]);

    //Para salvar o banco de dados com ANO-MES-DIA
    $data_consulta = explode("/", $data_consulta);
    $data_consulta = $data_consulta[2] . "-" . $data_consulta[1] . "-" . $data_consulta[0];
    
    $data_desbloqueio = explode("/", $data_desbloqueio);
    $data_desbloqueio = $data_desbloqueio[2] . "-" . $data_desbloqueio[1] . "-" . $data_desbloqueio[0];

    //montar o sql para inserir ou atualizar
    if (empty($id)) {
        // se for realmente inserir
        $sql = "insert into bloqueio (id,id_paciente,data_consulta,data_desbloqueio) values (NULL, '$id_paciente','$data_consulta','$data_desbloqueio')";
    } else {
        // para fazer um update 
        $sql = "update bloqueio set 
                    id_paciente = '$id_paciente',
                    data_consulta = '$data_consulta',
                    data_desbloqueio = '$data_desbloqueio'
                    where id = $id limit 1";
    }

    //executar
    $consulta = $con->prepare($sql);
    //passar os parametros
    $consulta->bindParam(1, $id_paciente);
    $consulta->bindParam(2, $data_consulta);
    $consulta->bindParam(3, $data_desbloqueio);
    if (!empty($id))
        $consulta->bindParam(4, $id);
    //verificar se executa

    if ($consulta->execute()) {
        echo "<div class='alert alert-success'>Registro Salvo/Alterado com sucesso!</div>
            <div class = 'pull-right'>
                <a href = 'home.php?pg=listpacientesbloqqueado' class = 'btn btn-success' title = 'Listar'>
                    Visualizar a Lista Novamente
                </a>
                <a href = 'home.php?pg=cadbloqueio' class = 'btn btn-danger' title = 'Listar'>
                    Cadastrar Novamente
                </a>
            </div>";
    } else {
        echo "<div class='alert alert-block alert-danger'>Erro ao Salvar/Alterar</div>";
    }
} else {
    //se não foi - erro
    echo "<div class='alert alert-block alert-danger'>
		Erro ao acessar página</div>";
}