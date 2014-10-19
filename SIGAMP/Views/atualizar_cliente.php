<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_cliente.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Clientes</h2>

<table class="table table-striped table-bordered">
    <tr><td>Nome do Cliente<td>CPF</td><td>Endereço</td><td>Telefones</td><td>Atualizar</td></tr>
        <?php
            $clientes = listarClientes($conexao);
            foreach($clientes as $lista){
	?>
    <tr>
        <td><?=$lista['nm_cliente']?></td>
	<td><?=$lista['cpf_cliente']?></td>
        <td><?=$lista['nm_endereco_cliente']?>, <?=$lista['nm_cidade_cliente']?>\<?=$lista['sg_estado_cliente']?></td>
	<td><?=$lista['cd_telefone_um_cliente']?> \ <?=$lista['cd_telefone_dois_cliente']?></td>
        <td><a href="../Controllers/atualizar_cliente_bd.php?id=<?=$lista['cpf_cliente']?>"><button class="btn btn-info">Atualizar</button></a></td>
	</tr>
    <?php
        }
    ?>
	</table>
</center>
<a href="cliente.php">Voltar</a>

<?php
include '../Includes/rodape.php';
?>


