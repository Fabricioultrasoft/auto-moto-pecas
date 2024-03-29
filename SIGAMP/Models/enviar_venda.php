<?php
include '../CRUDs/banco_venda.php';
include '../CRUDs/banco_produto.php';
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

$qt_produto = totalproduto($conexao, $codigo);

if($qt_produto['qt_produto'] <= 0){
    $_SESSION["danger"] = "Você não possui mais esse produto no seu estoque, faça um novo pedido";
    header('Location: ../Views/cadastro_venda_produto.php?nome='.$nome.'&cpf='.$cpf);
    die();
}else if(insereVenda($conexao,$nome,$codigo,$data, $hora, $cpf, $nm_prod, $total, $usuario)){
    diminuiProduto($conexao, $codigo);
    if($qt_produto['qt_produto'] <= 5){
        $_SESSION["danger"] = "Estoque com poucos produtos, faça um novo pedido";        
    }else{
        $_SESSION["success"] = "Lançado no sistema com sucesso";
    }
    
    header('Location: ../Views/cadastro_venda_produto.php?nome='.$nome.'&cpf='.$cpf);
    die();
}else{
    $msg = mysqli_error($conexao)    ;
    ?>
<p class="text-danger">Erro ao cadastrar venda: <?=$msg?></p>
<?php
}
?>
