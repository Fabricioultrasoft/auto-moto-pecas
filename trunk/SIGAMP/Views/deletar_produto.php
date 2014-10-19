<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_produto.php';
?>

<center>
<h2>Lista de Produtos</h2>

<table class="table table-striped table-bordered">
    <tr><td>Nome do Produto<td>Nome do Fabricante</td><td>Deletar</td></tr>
        <?php
            $produtos = listarProdutos($conexao);
            foreach($produtos as $lista){
	?>
    <tr>
        <td><?=$lista['nm_produto']?></td>
	<td><?=$lista['nm_fabricante_produto']?></td>
        <td><a href="../Models/deletar_produto_bd.php?id=<?=$lista['cd_produto']?>"><button class="btn btn-danger">Deletar</button></a></td>
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