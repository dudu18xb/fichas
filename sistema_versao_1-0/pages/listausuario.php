<h1>Lista de usuários do Sistema</h1>

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
<div class="clearfix"></div>
<form name="form1" method="get" class="form-inline" style="margin-top: -133px;">
    <input type="hidden" name="pg" value="listpacmedic">
    <input type="text" name="busca" class="form-control buscar-botao" style="text-transform:uppercase" width="70%" placeholder="Digite o nome do Paciente">
    <input type="submit" class="btn btn-success" value="Pesquisar" style="width: 15%;">
</form>
<br>
<table class="table table-striped 
       table-hover table-bordered">
    <thead>
    <th style="text-align: center;">ID</th>
    <th width="25%" style="text-align: center;">Login</th>
    <th width="40%" style="text-align: center;">Nome de Usuário</th>
    <th width="25%" style="text-align: center;" >Opções</th>
</thead>

<?php
$busca = "";
if (isset($_GET["busca"]))
    $busca = trim($_GET["busca"]);
//sql para selecionar as plataformas
$sql = "select id, login, nome, senha from admin where nome like :busca order by nome";
$consulta = $con->prepare($sql);
$busca = "%$busca%";
$consulta->bindParam(":busca", $busca, PDO::PARAM_STR);
//executo o sql
$consulta->execute();
//gerar os dados na tela
while ($dados = $consulta->fetch(PDO::FETCH_OBJ)) {
    //separar os dados
    $id = $dados->id;
    $login = $dados->login;
    $nome = $dados->nome;
    $senha = $dados->senha;

    //mostrar os dados na linha da tabela
    echo "<tr>
				<td style='font-size:1.3em;text-align: center;'>$id</td>
				<td style='font-size:1.3em;text-align: center;'>$login</td>
				<td style='font-size:1.3em;text-align: center;'>$nome</td>
				<td>
                                
					<a 
					href='javascript:excluir($id)'
					class='btn btn-danger'>
						<i class='glyphicon glyphicon-trash'></i> Excluir
					</a>
                                
					<a href='home.php?pg=cadusuario&id=$id'
					class='btn btn-primary'>
						<i class='glyphicon glyphicon-pencil'></i> Alterar
					</a>
				</td>
			</tr>";
}
?>
</table>

<script type="text/javascript">
    function excluir(id) {
        if (confirm("Deseja mesmo excluir este registro?")) {
            //direcionar para a pagina de exclusão de dados
            location.href = "home.php?pg=excluirusuario&id=" + id;
        }
    }
</script>