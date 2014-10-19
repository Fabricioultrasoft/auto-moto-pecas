<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_servico.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_POST["id"];
$nome = $_POST["nome_servico"];
$preco = $_POST["preco_servico"];

if(alterarServico($conexao,$id,$nome,$preco)){
	header('Location: ../Views/atualizar_servico.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao alterar dados do <?=$nome?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>

