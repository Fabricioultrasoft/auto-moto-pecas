<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_usuario.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_POST["id"];
$nome = $_POST["nome_usuario"];
$cpf = $_POST["cpf_usuario"];
$senha = $_POST["senha_usuario"];
$nivel = $_POST["nv_acesso"];

if(alterarUsuario($conexao,$id,$nome,$cpf,$senha, $nivel)){
	header('Location: ../Views/listar_usuario.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao alterar dados do <?=$nome?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>
