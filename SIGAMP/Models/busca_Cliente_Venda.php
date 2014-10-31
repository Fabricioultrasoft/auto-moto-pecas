<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_cliente.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$cpf = $_POST["cpf"];

$cliente = buscaCliente($conexao,$cpf);

if($cliente != null){
    $nome = $cliente['nm_cliente'];
    $cpf = $cliente['cpf_cliente'];
    header('Location: ../Views/cadastro_venda.php?cliente=true&nome='.$nome.'&cpf='.$cpf);
    die();
} else if($cliente == 0) {
    header('Location: ../Views/cadastro_cliente.php');
    die();
}else{
    $msg = mysqli_error($conexao);
    ?>
	<p class="text-danger">Erro ao alterar dados do <?=$nome?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>


