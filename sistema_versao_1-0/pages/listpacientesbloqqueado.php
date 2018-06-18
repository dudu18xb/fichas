<h1>Lista de Pacientes Bloqueados</h1>

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
<div class="clearfix"></div>
<form name="form1" method="get" class="form-inline" style="margin-top: -133px;">
    <input type="hidden" name="pg" value="listpacientesbloqqueado">
    <input type="text" name="busca" class="form-control buscar-botao" style="text-transform:uppercase" width="70%" placeholder="Digite o nome do Paciente">
    <input type="submit" class="btn btn-success" value="Pesquisar" style="width: 15%;">
</form>
<br>
<table class="table table-striped 
       table-hover table-bordered">
    <thead>
    <th style="text-align: center;">ID</th>
    <th width="40%" style="text-align: center;">Nome do Paciente</th>
    <th width="13%" style="text-align: center;">Data de Consulta</th>
    <th width="13%" style="text-align: center;">Data de Desbloqueio</th>
    <th width="25%" style="text-align: center;" >Opções</th>
</thead>

<?php
$busca = "";
if (isset($_GET["busca"]))
    $busca = trim($_GET["busca"]);
//sql para selecionar as plataformas
$sql = "
		select
		b.id,
		p.nome paciente,
		date_format(b.data_consulta,'%d/%m/%Y') data_consulta,
		date_format(b.data_desbloqueio,'%d/%m/%Y') data_desbloqueio
		from bloqueio b
		inner join paciente p on (b.id_paciente = p.id)
                where p.nome like :busca order by p.nome";
$consulta = $con->prepare($sql);
$busca = "%$busca%";
$consulta->bindParam(":busca", $busca, PDO::PARAM_STR);
//executo o sql
$consulta->execute();
//gerar os dados na tela
while ($dados = $consulta->fetch(PDO::FETCH_OBJ)) {
    //separar os dados
    $id = $dados->id;
    $id_paciente = $dados->paciente;
    $data_consulta = $dados->data_consulta;
    $data_desbloqueio = $dados->data_desbloqueio;


    //mostrar os dados na linha da tabela
    echo "<tr>
				<td style='font-size:1.3em;text-transform:uppercase;text-align: center;'>$id</td>
				<td style='font-size:1.3em;text-transform:uppercase;text-align: center;'>$id_paciente</td>
				<td style='font-size:1.3em;text-transform:uppercase;text-align: center;'>$data_consulta</td>
				<td style='font-size:1.3em;text-transform:uppercase;text-align: center;'>$data_desbloqueio</td>
				<td>
                                
					<a 
					href='javascript:excluir($id)'
					class='btn btn-danger'>
						<i class='glyphicon glyphicon-trash'></i> Excluir
					</a>
                                
					<a href='home.php?pg=cadbloqueio&id=$id'
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
            location.href = "home.php?pg=excluirpacientesbloqueados&id=" + id;
        }
    }
</script>