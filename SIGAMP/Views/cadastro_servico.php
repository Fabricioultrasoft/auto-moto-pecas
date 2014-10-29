<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
    <h2>Cadastro de Serviços</h2>
    <form action="../Models/enviar_servico.php" method="post">
        <table border="0" class="table">
            <tr><td>Nome do Serviço</td><td><input type="text" class="form-control" name="nome_servico" size="60" required></td></tr>
            <tr><td>Preço do Serviço</td><td><input type="number" class="form-control" step="any" min="0" name="preco_servico" size="20" required></td></tr>
           
        </table>
        <button class="btn btn-success" type="submit">Cadastrar</button>     
    </form>
    <a href="listar_servico.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>
