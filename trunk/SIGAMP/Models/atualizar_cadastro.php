<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_produto.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_POST["id"];
$nome = $_POST["nome_produto"];
$fabricante = $_POST["nome_fabricante"];
$qtd = $_POST["qtd_produto"];
$preco = $_POST["preco_produto"];
$desc = $_POST["desc_produto"];

if(alterarProduto($conexao,$id,$nome,$fabricante,$qtd, $preco, $desc)){
	header('Location: ../Views/listar_produto.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao alterar dados do <?=$nome?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>

