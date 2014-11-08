<?php
include '../CRUDs/banco_servico.php';
include '../Includes/conecta.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$nome = $_POST["nome_servico"];
$preco = $_POST["preco_servico"];

if(insereServico($conexao, $nome, $preco)){
    $_SESSION["success"] = "Cadastrado com sucesso";
    header('Location: ../Views/listar_servico.php');
    die;
}else{
    $msg = mysqli_error($conexao)    ;
    ?>
<p class="text-danger">Erro ao cadastrar serviço: <?=$msg?></p>
<?php
}
?>
