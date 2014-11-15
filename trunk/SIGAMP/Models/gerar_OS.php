<?php
include '../CRUDs/banco_ordem.php';
include '../Includes/conecta.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$veiculo = $_POST["veiculo"];
$nome = $_POST["nome"];
$data = date("Y-m-d");
$cpf = $_POST["cpf"];
$desc = $_POST["desc"];
    

if(insereOrdem($conexao, $nome, $data, $desc, $veiculo, $cpf)){
    $_SESSION["success"] = "Ordem gerada com sucesso";
    header('Location: ../Views/listar_os.php');
    die;
}else{
    $msg = mysqli_error($conexao);
    ?>
<p class="text-danger">Erro ao cadastrar ordem de serviço: <?=$msg?></p>
<?php
}
?>
?>
