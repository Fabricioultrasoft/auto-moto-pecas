<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_cliente.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Clientes</h2>
<?php
if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}
?>
<p align="right"><a href="cadastro_cliente.php"><button class="btn btn-info">Cadastrar</button></a></p>
<table class="table table-striped table-bordered">
    <tr><td>Nome do Cliente</td><td>CPF</td><td>RG</td><td>Endereço</td><td>Telefones</td><td>E-Mail</td><td>Atualizar</td><td>Deletar</td></tr>
        <?php
            $clientes = listarClientes($conexao);
            foreach($clientes as $lista){
	?>
    <tr>
	<td><?=$lista['nm_cliente']?></td>
	<td><?=$lista['cpf_cliente']?></td>
	<td><?=$lista['cd_registro_geral_cliente']?></td>
	<td><?=$lista['nm_endereco_cliente']?>, <?=$lista['nm_cidade_cliente']?>\<?=$lista['sg_estado_cliente']?></td>
	<td><?=$lista['cd_telefone_um_cliente']?> \ <?=$lista['cd_telefone_dois_cliente']?></td>
        <td><?=$lista['nm_email_cliente']?></td>
        <td><a href="../Controllers/atualizar_cliente_bd.php?id=<?=$lista['cpf_cliente']?>"><button class="btn btn-info">Atualizar</button></a></td>
        <td><a href="../Models/deletar_cliente_bd.php?id=<?=$lista['cpf_cliente']?>"><button class="btn btn-danger">Deletar</button></a></td>
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


