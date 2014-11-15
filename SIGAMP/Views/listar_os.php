<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_ordem.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Ordens de Serviço</h2>
<?php
if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}
?>
<p align="right"><a href="listar_os_fechadas.php"><button class="btn btn-info">Listar OS Fechadas</button> <a href="cadastro_os.php"><button class="btn btn-info">Cadastrar</button></a></p>
<table class="table table-striped table-bordered">
    <tr><td>OS</td><td>Nome do Cliente</td><td>Data</td><td>Veículo</td><td>Situação</td><td>Descrição</td><td>Visualizar Ordem</td><td>Atualizar</td><td>Deletar</td></tr>
        <?php
            $os = listarOS($conexao);
            foreach($os as $lista){
	?>
    <tr>
    	<td><?=$lista['SERVICO_cd_servico']?></td>
	<td><?=$lista['CLIENTE_nm_cliente']?></td>
	<td><?=$lista['VENDA_dt_venda']?></td>
	<td><?=$lista['VEICULO_nm_veiculo']?></td>
	<td>
            <?php 
            if($lista['st_servico'] == 1){
                echo 'Em Andamento';
            }else{
                echo 'Concluído';
            }
            ?>            
        </td>
        <td><?=substr($lista['ds_manutencao'], 0, 70)?></td>
        <td><a href="../Views/visualizar_os.php?id=<?=$lista['SERVICO_cd_servico']?>"><button class="btn btn-default">Visualizar OS</button></a></td>
        <td><a href="../Controllers/atualizar_os_bd.php?id=<?=$lista['SERVICO_cd_servico']?>"><button class="btn btn-info">Atualizar</button></a></td>
        <td><a href="../Models/deletar_os_bd.php?id=<?=$lista['SERVICO_cd_servico']?>"><button class="btn btn-danger">Deletar</button></a></td>
	</tr>
    <?php
        }
    ?>
	</table>
</center>
<a href="acesso.php">Pagina Principal</a>

<?php
include '../Includes/rodape.php';
?>


