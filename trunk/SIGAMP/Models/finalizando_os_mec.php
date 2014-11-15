<?php
include '../CRUDs/banco_ordem.php';
include '../Includes/conecta.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
verificaNivel();
$codigo = $_GET["id"];
$status = baixaOrdem($conexao, $codigo);

if($status['st_servico'] == 0){
    $_SESSION["success"] = "Serviço executado com sucesso";
    header('Location: ../Views/mecanico.php');
    die;
}else{
    $msg = mysqli_error($conexao)    ;
    ?>
<p class="text-danger">Erro ao dar baixa na ordem: <?=$msg?></p>
<?php
}
?>



