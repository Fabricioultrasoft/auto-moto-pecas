<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
include '../CRUDs/banco_ordem.php';

usuarioEstaLogado();
verificaUsuario();
?>
<h1>Bem Vindo!</h1>

<p class="text-success">Você está logado como <u><?=$_SESSION['UsuarioNome']?></u><br><br> <a href="sair.php">Sair</a></p>

<center>
<h2>Lista de Ordens de Serviço</h2>
<?php
if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}
?>
<table class="table table-striped table-bordered">
    <tr><td>OS</td><td>Nome do Cliente</td><td>Data</td><td>Veículo</td><td>Situação</td><td>Descrição</td><td>Visualizar Ordem</td><td>Baixar</td></tr>
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
        <td><a href="../Views/visualizar_os_mec.php?id=<?=$lista['SERVICO_cd_servico']?>"><button class="btn btn-default">Visualizar OS</button></a></td>
        <td><a href="../Models/finalizando_os_mec.php?id=<?=$lista['SERVICO_cd_servico']?>"><button class="btn btn-info">Dar Baixa</button></a></td>
	</tr>
    <?php
        }
    ?>
	</table>
</center>

<?php
include '../Includes/rodape.php';
?>
