<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_venda.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Vendas</h2>
<p align="right"><a href="cadastro_venda.php"><button class="btn btn-info">Cadastrar</button></a></p>
<table class="table table-striped table-bordered">
    <tr><td>Codigo da Venda</td><td>Data da Venda</td><td>Usuário</td><td>Cliente</td><td>Valor Total</td><td>Atualizar</td><td>Deletar</td></tr>
        <?php
            $vendas = listarVendas($conexao);
            foreach($vendas as $lista){
                $data = $lista['dt_venda'];
                $data = date("d/m/Y");
	?>
    <tr>
	<td><?=$lista['cd_venda']?></td>
        <td><?php echo $data;  ?></td>
	<td><?=$lista['USUARIO_cd_usuario']?></td>
	<td><?=$lista['CLIENTE_cpf_cliente']?></td>
	<td><?=$lista['vl_total_servico_produto_venda']?></td>
        <td><a href="../Controllers/atualizar_venda_bd.php?id=<?=$lista['cd_venda']?>"><button class="btn btn-info">Atualizar</button></a></td>
        <td><a href="../Models/deletar_venda_bd.php?id=<?=$lista['cd_venda']?>"><button class="btn btn-danger">Deletar</button></a></td>
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


