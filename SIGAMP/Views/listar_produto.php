<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_produto.php';
?>

<center>
<h2>Lista de Produtos</h2>

<table class="table table-striped table-bordered">
    <tr><td>Código</td><td>Nome do Produto</td><td>Fabricante</td><td>Quantidade</td><td>Preço</td><td>Descrição</td></tr>
        <?php
            $produtos = listarProdutos($conexao);
            foreach($produtos as $lista){
	?>
    <tr>
	<td><?=$lista['cd_produto']?></td>
	<td><?=$lista['nm_produto']?></td>
	<td><?=$lista['nm_fabricante_produto']?></td>
	<td><?=$lista['qt_produto']?></td>
	<td><?=$lista['vl_produto']?></td>
	<td><?=substr($lista['ds_produto'], 0, 20)?></td>
	</tr>
    <?php
        }
    ?>
	</table>
</center>
<a href="produto.php">Voltar</a>

<?php
include '../Includes/rodape.php';
?>


