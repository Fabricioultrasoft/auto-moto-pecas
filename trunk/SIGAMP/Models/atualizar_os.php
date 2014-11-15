<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_ordem.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_POST["id"];
$desc = $_POST["desc"];


if(alterarOrdem($conexao,$id,$desc)){
        $_SESSION["success"] = "Atualizado com sucesso";
	header('Location: ../Views/listar_os.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao alterar dados do <?=$nome?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>



