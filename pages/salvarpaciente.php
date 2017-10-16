<?php

//verificar se foi dado post
if ($_POST) {
    //se foi - salvar/alterar
    //recuperar os dados enviados
    $id = trim($_POST["id"]);
    $nome = trim($_POST["nome"]);
    $datanasc = trim($_POST["datanasc"]);

    //Para salvar o banco de dados com ANO-MES-DIA
    $datanasc = explode("/", $datanasc);
    $datanasc = $datanasc[2] . "-" . $datanasc[1] . "-" . $datanasc[0];

    //montar o sql para inserir ou atualizar
    if (empty($id)) {
        //inserir
        $sql = "insert into paciente values
			(NULL, ? , ?)";
        //NULL, nome, cpf, telefone
    } else {
        //atualizar
        $sql = "update paciente set nome = ?, datanasc = ? where id = ? limit 1";
    }
    //executar
    $consulta = $con->prepare($sql);
    //passar os parametros
    $consulta->bindParam(1, $nome);
    $consulta->bindParam(2, $datanasc);
    if (!empty($id))
        $consulta->bindParam(3, $id);
    //verificar se executa

    if ($consulta->execute()) {
        echo "<div class='alert alert-success'>Registro Salvo/Alterado com sucesso!</div>
            <div class = 'pull-right'>
                <a href = 'home.php?pg=listpacientescad' class = 'btn btn-success' title = 'Listar'>
                    Visualizar a Lista Novamente
                </a>
                <a href = 'home.php?pg=cadpacientebloq' class = 'btn btn-danger' title = 'Listar'>
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