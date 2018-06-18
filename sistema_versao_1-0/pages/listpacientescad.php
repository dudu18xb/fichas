<h1>Lista de Pacientes Cadastrados</h1>

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
<div class="clearfix"></div>
<form name="form1" method="get" class="form-inline" style="margin-top: -133px;">
    <input type="hidden" name="pg" value="listpacientescad">
    <input type="text" name="busca" class="form-control buscar-botao" style="text-transform:uppercase" width="70%" placeholder="Digite o nome do Paciente">
    <input type="submit" class="btn btn-success" value="Pesquisar" style="width: 15%;">
</form>
<br>
<table class="table table-striped 
       table-hover table-bordered">
    <thead>
    <th style="text-align: center;">ID</th>
    <th width="40%" style="text-align: center;">Nome do Paciente</th>
    <th width="13%" style="text-align: center;">Data de Nascimento</th>
    <th width="25%" style="text-align: center;" >Opções</th>
</thead>

<?php
$busca = "";
if (isset($_GET["busca"]))
    $busca = trim($_GET["busca"]);
//sql para selecionar as plataformas
$sql = "select id, nome, date_format(datanasc,'%d/%m/%Y') datanasc from paciente where nome like :busca order by nome";
$consulta = $con->prepare($sql);
$busca = "%$busca%";
$consulta->bindParam(":busca", $busca, PDO::PARAM_STR);
//executo o sql
$consulta->execute();
//gerar os dados na tela
while ($dados = $consulta->fetch(PDO::FETCH_OBJ)) {
    //separar os dados
    $id = $dados->id;
    $nome = $dados->nome;
    $datanasc = $dados->datanasc;

    //mostrar os dados na linha da tabela
    echo "<tr>
				<td style='font-size:1.3em;text-transform:uppercase;text-align: center;'>$id</td>
				<td style='font-size:1.3em;text-transform:uppercase;text-align: center;'>$nome</td>
				<td style='font-size:1.3em;text-transform:uppercase;text-align: center;'>$datanasc</td>
				<td>
                                
					<a 
					href='javascript:excluir($id)'
					class='btn btn-danger'>
						<i class='glyphicon glyphicon-trash'></i> Excluir
					</a>
                                
					<a href='home.php?pg=cadpacientebloq&id=$id'
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
            location.href = "home.php?pg=excluirpaciente&id=" + id;
        }
    }
</script>