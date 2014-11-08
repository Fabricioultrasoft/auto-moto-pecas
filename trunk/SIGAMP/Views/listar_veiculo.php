<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_veiculo.php';
include '../CRUDs/banco_cliente.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Veículos</h2>
<?php
if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}
?>
<p align="right"><a href="cadastro_veiculo.php"><button class="btn btn-info">Cadastrar</button></a></p>
<table class="table table-striped table-bordered">
    <tr><td>Nome do Cliente</td><td>CPF</td><td>Placa do Veículo</td><td>Cor do Veículo</td><td>Marca do Veículo</td><td>Modelo do Veículo</td><td>Ano do Veículo</td><td>Atualizar</td><td>Deletar</td></tr>
        <?php
            $clientes = listarVeiculos($conexao);
            foreach($clientes as $lista){
	?>
        
    <tr>
        <td><?=$lista['nm_cliente']?></td>
	<td><?=$lista['CLIENTE_cpf_cliente']?></td>
	<td><?=$lista['cd_placa_veiculo']?></td>
	<td><?=$lista['nm_cor_veiculo']?></td>
	<td><?=$lista['nm_marca_veiculo']?></td>
        <td><?=$lista['nm_modelo_veiculo']?></td>
        <td><?=$lista['aa_veiculo']?></td>
        <td><a href="../Controllers/atualizar_veiculo_bd.php?id=<?=$lista['cd_veiculo']?>"><button class="btn btn-info">Atualizar</button></a></td>
        <td><a href="../Models/deletar_veiculo_bd.php?id=<?=$lista['cd_veiculo']?>"><button class="btn btn-danger">Deletar</button></a></td>
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


