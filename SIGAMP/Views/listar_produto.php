<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_produto.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Produtos</h2>
<p align="right"><a href="cadastro_produto.php"><button class="btn btn-info">Cadastrar</button></a></p>

<table class="table table-striped table-bordered">
    <tr><td>Código</td><td>Nome do Produto</td><td>Fabricante</td><td>Quantidade</td><td>Preço</td><td>Descrição</td><td>Atualizar</td><td>Deletar</td></tr>
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
        <td><a href="../Controllers/atualizar_produto_bd.php?id=<?=$lista['cd_produto']?>"><button class="btn btn-info">Atualizar</button></a></td>
        <td><a href="../Models/deletar_produto_bd.php?id=<?=$lista['cd_produto']?>"><button class="btn btn-danger">Deletar</button></a></td>
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


