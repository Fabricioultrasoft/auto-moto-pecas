<?php
include '../CRUDs/banco_produto.php';
include '../Includes/conecta.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$nome = $_POST["nome_produto"];
$fabricante = $_POST["nome_fabricante"];
$qtdd = $_POST["qtd_produto"];
$preco = $_POST["preco_produto"];
$desc = $_POST["desc_produto"];

if(insereProduto($conexao, $nome, $fabricante, $qtdd, $preco, $desc)){
    header('Location: ../Views/listar_produto.php');
    die;
}else{
    $msg = mysqli_error($conexao)    ;
    ?>
<p class="text-danger">Erro ao cadastrar produto: <?=$msg?></p>
<?php
}
?>