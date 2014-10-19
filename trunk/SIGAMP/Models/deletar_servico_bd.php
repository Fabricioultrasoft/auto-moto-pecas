<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_servico.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_GET["id"];

if(removeServico($conexao,$id)){
	header('Location: ../Views/deletar_servico.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao remover serviço: <?=$msg?></p>
<?php
}

include '../Includes/rodape.php';
?>

