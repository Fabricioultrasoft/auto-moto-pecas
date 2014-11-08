<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_venda.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_POST["id"];
$total = $_POST["total"];
$data = date("Y-m-d");
$usuario = usuarioLogado();

if(alterarVenda($conexao,$id,$total,$data,$usuario)){
        $_SESSION["success"] = "Atualizado com sucesso";
	header('Location: ../Views/listar_venda.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao alterar dados do veículo placa <?=$placa?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>

