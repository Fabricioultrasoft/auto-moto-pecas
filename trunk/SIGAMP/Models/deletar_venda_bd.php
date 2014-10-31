<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_venda.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_GET["id"];

if(removeVenda($conexao,$id)){
	header('Location: ../Views/listar_venda.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao remover a venda: <?=$msg?></p>
<?php
}

include '../Includes/rodape.php';
?>