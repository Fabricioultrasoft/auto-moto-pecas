<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_veiculo.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_GET["id"];

if(removeVeiculo($conexao,$id)){
	header('Location: ../Views/listar_veiculo.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao remover Produto: <?=$msg?></p>
<?php
}

include '../Includes/rodape.php';
?>