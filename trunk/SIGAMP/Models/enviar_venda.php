<?php
include '../CRUDs/banco_venda.php';
include '../Includes/conecta.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$data = date("Y-m-d");
$cpf = $_POST["cpf_cliente"];
$total = $_POST["total"];
$usuario = usuarioLogado();



if(insereVenda($conexao, $data, $cpf, $total, $usuario)){
    header('Location: ../Views/listar_venda.php');
    die;
}else{
    $msg = mysqli_error($conexao)    ;
    ?>
<p class="text-danger">Erro ao cadastrar usuario: <?=$msg?></p>
<?php
}
?>
