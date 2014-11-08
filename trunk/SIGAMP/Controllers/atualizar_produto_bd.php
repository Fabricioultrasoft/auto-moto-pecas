<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_produto.php';
include 'logica_usuario.php';
verificaUsuario();
$id = $_GET['id'];
$busca = buscaProduto($conexao, $id)

?>

<center>
    <h2>Atualização de Dados de Produtos</h2>
    <form action="../Models/atualizar_cadastro.php" method="post">
        <input type="hidden" value="<?=$busca['cd_produto']?>" name="id">
        <table border="0" class="table">
            <tr><td>Nome do Produto</td><td><input type="text" class="form-control" name="nome_produto" size="60" value="<?=$busca['nm_produto']?>"></td></tr>
            <tr><td>Nome do Fabricante</td><td><input type="text" class="form-control" name="nome_fabricante" size="60" value="<?=$busca['nm_fabricante_produto']?>"></td></tr>
            <tr><td>Quantidade</td><td><input type="number" class="form-control" name="qtd_produto" min="1" size="20" value="<?=$busca['qt_produto']?>"></td></tr>
            <tr><td>Preço do Produto</td><td><input type="number" class="form-control" step="any" min="0" name="preco_produto" size="20" value="<?=$busca['vl_produto']?>"></td></tr>
            <tr><td>Descrição do Produto</td><td><textarea class="form-control" cols="60" rows="7" name="desc_produto"><?=$busca['ds_produto']?></textarea></td></tr>
        </table>
        <button class="btn btn-success" type="submit">Atualizar</button>     
    </form>
    <a href="../Views/listar_produto.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>

