<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
    <h2>Cadastro de Produtos</h2>
    <form action="../Models/enviar_cadastro.php" method="post">
        <table border="0" class="table">
            <tr><td>Nome do Produto</td><td><input type="text" class="form-control" name="nome_produto" size="60" required></td></tr>
            <tr><td>Nome do Fabricante</td><td><input type="text" class="form-control" name="nome_fabricante" size="60" required></td></tr>
            <tr><td>Quantidade</td><td><input type="number" class="form-control" name="qtd_produto" min="1" size="20" required></td></tr>
            <tr><td>Preço do Produto</td><td><input type="number" class="form-control" step="any" min="0" name="preco_produto" size="20" required></td></tr>
            <tr><td>Descrição do Produto</td><td><textarea class="form-control" cols="60" rows="7" name="desc_produto" required></textarea></td></tr>
        </table>
        <button class="btn btn-success" type="submit">Cadastrar</button>     
    </form>
    <a href="listar_produto.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>
