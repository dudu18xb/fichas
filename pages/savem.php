<?php

//verificar se foi dado post
if ($_POST) {
    //se foi - salvar/alterar
    //recuperar os dados enviados
    $id = trim($_POST["id"]);
    $nome = trim($_POST["nome"]);
    $numero = trim($_POST["numero"]);
    $data = trim($_POST["data"]);

    //Para salvar o banco de dados com ANO-MES-DIA
    $data = explode("/", $data);
    $data = $data[2] . "-" . $data[1] . "-" . $data[0];

    //montar o sql para inserir ou atualizar
    if (empty($id)) {
        //inserir
        $sql = "insert into ficha_medica values
			(NULL, ? , ? , ?)";
        //NULL, nome, cpf, telefone
    } else {
        //atualizar
        $sql = "update ficha_medica set nome = ?, numero = ?, data = ? where id = ? limit 1";
    }
    //executar
    $consulta = $con->prepare($sql);
    //passar os parametros
    $consulta->bindParam(1, $nome);
    $consulta->bindParam(2, $numero);
    $consulta->bindParam(3, $data);
    if (!empty($id))
        $consulta->bindParam(4, $id);
    //verificar se executa

    if ($consulta->execute()) {
        echo "<div class='alert alert-success'>Registro Salvo/Alterado com sucesso!</div>
            <div class = 'pull-right'>
                <a href = 'home.php?pg=cadmpacientes' class = 'btn btn-danger' title = 'Cadastrar'>
                    Cadastrar Novamente
                </a>                
                <a href = 'home.php?pg=listpacmedic' class = 'btn btn-success' title = 'Listar'>
                    Visualizar a Lista Novamente
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