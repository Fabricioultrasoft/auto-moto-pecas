<?php
include '../CRUDs/banco_usuario.php';
include '../Includes/conecta.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

$nome = $_POST["nome_usuario"];
$cpf = $_POST["cpf_usuario"];
$senha = $_POST["senha_usuario"];
$nivel = $_POST["nv_acesso"];


if(insereUsuario($conexao, $nome, $cpf, $senha, $nivel)){
    $_SESSION["success"] = "Cadastrado com sucesso";
    header('Location: ../Views/listar_usuario.php');
    die;
}else{
    $msg = mysqli_error($conexao)    ;
    ?>
<p class="text-danger">Erro ao cadastrar usuario: <?=$msg?></p>
<?php
}
?>