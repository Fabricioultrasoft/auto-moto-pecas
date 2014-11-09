<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_servico.php';
include 'logica_usuario.php';
verificaUsuario();
$id = $_GET['id'];
$busca = buscaServico($conexao, $id)

?>

<center>
    <h2>Atualização de Dados de Serviços</h2>
    <form action="../Models/atualizar_servico.php" method="post">
        <input type="hidden" value="<?=$busca['cd_servico']?>" name="id">
        <table border="0" class="table">
            <tr><td>Nome do Serviço</td><td><input type="text" class="form-control" name="nome_servico" size="60" value="<?=$busca['nm_servico']?>" required=""></td></tr>
            <tr><td>Preço do Serviço</td><td><input type="number" class="form-control" step="any" min="0" name="preco_servico" size="20" value="<?=$busca['vl_servico']?>" required=""></td></tr>
        </table>
        <button class="btn btn-success" type="submit">Atualizar</button>     
    </form>
    <a href="../Views/listar_servico.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>
