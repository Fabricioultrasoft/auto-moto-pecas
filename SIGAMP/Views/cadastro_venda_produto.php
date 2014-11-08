<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
include '../CRUDs/banco_produto.php';
include '../CRUDs/banco_servico.php';
verificaUsuario();
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];    
?>

<center>
<h2>Lançamento de Vendas</h2>
</center>
Cliente: <?=$nome?><br>
CPF: <?=$cpf?><br><br>
<table class="table table-striped table-bordered">
    <tr><td>Código</td><td>Nome do Produto</td><td>Preço</td><td>Vender</td></tr>
        <?php
            $produtos = listarProdutos($conexao);
            foreach($produtos as $lista){
	?>
        
    <tr>
	<td><?=$lista['cd_produto']?></td>
	<td><?=$lista['nm_produto']?></td>
	<td><?=$lista['vl_produto']?></td>
	
        <td><a href="../Models/enviar_venda.php?id=<?=$lista['cd_produto']?>&nome=<?=$nome?>&cpf=<?=$cpf?>&nm_produto=<?=$lista['nm_produto']?>&valor=<?=$lista['vl_produto']?>"><button class="btn btn-success">Vender</button></a></td>
    </tr>
    <?php
        }
    ?>
    	</table>



<p align="right"><a href="venda.php"><button class="btn btn-info">Finalizar Venda</button></a></p>
