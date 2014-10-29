<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_servico.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Serviços</h2>
<p align="right"><a href="cadastro_servico.php"><button class="btn btn-info">Cadastrar</button></a></p>

<table class="table table-striped table-bordered">
    <tr><td>Código</td><td>Nome do Serviço</td><td>Preço</td><td>Atualizar</td><td>Deletar</td></tr>
        <?php
            $servicos = listarServicos($conexao);
            foreach($servicos as $lista){
	?>
    <tr>
	<td><?=$lista['cd_servico']?></td>
	<td><?=$lista['nm_servico']?></td>
	<td><?=$lista['vl_servico']?></td>
        <td><a href="../Controllers/atualizar_servico_bd.php?id=<?=$lista['cd_servico']?>"><button class="btn btn-info">Atualizar</button></a></td>
        <td><a href="../Models/deletar_servico_bd.php?id=<?=$lista['cd_servico']?>"><button class="btn btn-danger">Deletar</button></a></td>
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




