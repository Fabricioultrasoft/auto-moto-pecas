<?php
require('../Includes/conecta.php');
require('../CRUDs/banco_produto.php');
include '../Controllers/logica_usuario.php';
verificaUsuario();

$codigo = $_POST['cd_produto'];

$produto = buscaProduto($conexao,$codigo);

if($produto != null){
    $nome = $produto['nm_produto'];
    $codigo = $produto['cd_produto'];
    header('Location: ../Views/cadastro_venda_produto.php?produto=true&nome='.$nome.'&codigo='.$codigo);
    die();
} else if($produto == 0) {
    header('Location: ../Views/cadastro_produto.php');
    die();
}else{
    $msg = mysqli_error($conexao);
    ?>
	<p class="text-danger">Erro ao alterar dados do <?=$nome?>: <?=$msg?></p>
<?php
}
require('../Includes/rodape.php');
?>




