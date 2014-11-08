<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_cliente.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$id = $_POST["id"];
$nome = $_POST["nome_cliente"];
$cpf = $_POST["cpf_cliente"];
$rg = $_POST["rg_cliente"];
//$nacto = $_POST["aniversario_cliente"];
$endereco = $_POST["endereco_cliente"];
$cidade = $_POST["cidade_cliente"];
$estado = $_POST["estado_cliente"];
$tel = $_POST["tel_cliente"];
$cel = $_POST["cel_cliente"];
$email = $_POST["email_cliente"];

$data = implode('-',array_reverse(explode('/',$_POST['aniversario_cliente'])));

if(alterarCliente($conexao, $id, $nome, $cpf, $rg, $data, $endereco, $cidade, $estado, $tel, $cel, $email)){
     $_SESSION["success"] = "Atualizado com sucesso";
    header('Location: ../Views/listar_cliente.php');
	die();
} else {
	$msg = mysqli_error($conexao);
	?>
	<p class="text-danger">Erro ao alterar dados do <?=$nome?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>