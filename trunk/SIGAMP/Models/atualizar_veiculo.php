<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_veiculo.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_POST["id"];
$placa = $_POST["placa"];
$cor = $_POST["cor"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$ano = $_POST["ano"];

if(alterarVeiculo($conexao,$id,$placa,$cor,$marca,$modelo,$ano)){
	header('Location: ../Views/listar_veiculo.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao alterar dados do veículo placa <?=$placa?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>
