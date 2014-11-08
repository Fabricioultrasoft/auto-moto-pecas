<?php
include '../CRUDs/banco_venda.php';
include '../Includes/conecta.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$codigo = $_GET["id"];
$nome = $_GET["nome"];
$data = date("Y-m-d");
$hora = date("H:i:s");
$cpf = $_GET["cpf"];
$nm_prod = $_GET["nm_produto"];
$total = $_GET["valor"];
$usuario = usuarioLogado();



if(insereVenda($conexao,$nome,$codigo,$data, $hora, $cpf, $nm_prod, $total, $usuario)){
    header('Location: ../Views/cadastro_venda_produto.php?nome='.$nome.'&cpf='.$cpf);
    die;
}else{
    $msg = mysqli_error($conexao)    ;
    ?>
<p class="text-danger">Erro ao cadastrar venda: <?=$msg?></p>
<?php
}
?>
