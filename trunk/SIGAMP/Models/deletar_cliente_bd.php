<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_cliente.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_GET["id"];

if(removeCliente($conexao,$id)){
	header('Location: ../Views/listar_cliente.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao remover Cliente: <?=$msg?></p>
<?php
}

include '../Includes/rodape.php';
?>