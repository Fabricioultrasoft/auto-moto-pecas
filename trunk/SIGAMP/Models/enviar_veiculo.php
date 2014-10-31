<?php
include '../CRUDs/banco_veiculo.php';
include '../Includes/conecta.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$nome = $_POST["nome_cliente"];
$cpf = $_POST["cpf_cliente"];
$placa = $_POST["placa"];
$cor = $_POST["cor"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$ano = $_POST["ano"];


if(insereVeiculo($conexao, $nome, $cpf, $placa, $cor, $modelo, $marca, $ano)){
    header('Location: ../Views/listar_veiculo.php');
    die;
}else{
    $msg = mysqli_error($conexao)    ;
    ?>
<p class="text-danger">Erro ao cadastrar usuario: <?=$msg?></p>
<?php
}
?>