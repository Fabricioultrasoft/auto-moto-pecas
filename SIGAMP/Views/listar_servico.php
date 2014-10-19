<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_servico.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Serviços</h2>

<table class="table table-striped table-bordered">
    <tr><td>Código</td><td>Nome do Serviço</td><td>Preço</td></tr>
        <?php
            $servicos = listarServicos($conexao);
            foreach($servicos as $lista){
	?>
    <tr>
	<td><?=$lista['cd_servico']?></td>
	<td><?=$lista['nm_servico']?></td>
	<td><?=$lista['vl_servico']?></td>
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




