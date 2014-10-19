<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_servico.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Produtos</h2>

<table class="table table-striped table-bordered">
    <tr><td>Nome do Serviço<td>Preço do Serviço</td><td>Deletar</td></tr>
        <?php
            $servicos = listarServicos($conexao);
            foreach($servicos as $lista){
	?>
    <tr>
        <td><?=$lista['nm_servico']?></td>
	<td><?=$lista['vl_servico']?></td>
        <td><a href="../Models/deletar_servico_bd.php?id=<?=$lista['cd_servico']?>"><button class="btn btn-danger">Deletar</button></a></td>
	</tr>
    <?php
        }
    ?>
	</table>
</center>
<a href="servico.php">Voltar</a>

<?php
include '../Includes/rodape.php';
?>