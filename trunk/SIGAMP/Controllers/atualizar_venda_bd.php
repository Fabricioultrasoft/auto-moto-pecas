<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_venda.php';
include 'logica_usuario.php';
verificaUsuario();
$id = $_GET['id'];
$busca = buscaVenda($conexao, $id)
?>

<center>
    <h2>Atualização de Dados de Vendas</h2>
    <form action="../Models/atualizar_venda.php" method="post">
        <input type="hidden" value="<?=$busca['cd_venda']?>" name="id">
        <table border="0" class="table">
          
           <tr><td>CPF</td><td><input type="number" class="form-control" name="cpf_cliente" min="1" max="99999999999" value="<?=$busca['CLIENTE_cpf_cliente']?>" size="11" required></td></tr>
           <tr><td>Valor Total</td><td><input type="number" step="any" class="form-control" name="total" min="1" required value="<?=$busca['vl_total_servico_produto_venda']?>"></td></tr>        
        </table>
        <button class="btn btn-success" type="submit">Atualizar</button>     
    </form>
    <a href="../Views/venda.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>