<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_produto.php';

$id = $_GET["id"];

if(removeProduto($conexao,$id)){
	header('Location: ../Views/deletar_produto.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao remover Produto: <?=$msg?></p>
<?php
}

include '../Includes/rodape.php';
?>

