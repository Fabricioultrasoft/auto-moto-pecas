<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_venda.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Vendas</h2>
<?php
if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}
?>
<p align="right"><a href="cadastro_venda.php"><button class="btn btn-info">Lançar Vendas</button></a></p>
<p align="right"><a href="venda.php"><button class="btn btn-info">Listar por Horário</button></a> <a href="listar_venda_valor.php"><button class="btn btn-info">Listar por Valor</button></a> <a href="listar_venda_produto.php"><button class="btn btn-info">Listar por Produto</button></a> <a href="listar_venda_usuario.php"><button class="btn btn-info">Listar por Usuário</button></a> <a href="listar_venda_cliente.php"><button class="btn btn-info">Listar por Cliente</button></a></p>
<table class="table table-striped table-bordered">
    <tr><td>Codigo</td><td>Data da Venda</td><td>Usuário</td><td>Cliente</td><td>Produto</td><td>Valor</td><td>Deletar</td></tr>
        <?php
            $vendas = listarVendasCliente($conexao);
            foreach($vendas as $lista){
                $data = $lista['dt_venda'];
                $data = date("d/m/Y");
	?>
    <tr>
	<td><?=$lista['cd_venda']?></td>
        <td><?php echo $data;?> - <?=$lista['hr_venda']?></td>
	<td><?=$lista['USUARIO_nm_usuario']?></td>  
	<td><?=$lista['CLIENTE_nm_cliente']?></td>
        <td><?=$lista['PRODUTO_nm_produto']?></td>        
        <td><?=$lista['PRODUTO_vl_produto']?></td>
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






