<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_veiculo.php';
include 'logica_usuario.php';
verificaUsuario();
$id = $_GET['id'];
$busca = buscaVeiculo($conexao, $id)

?>

<center>
    <h2>Atualização de Dados de Veículo </h2>
<form action="../Models/atualizar_veiculo.php" method="post">
        <table border="0" class="table">
            <input type="hidden" name="id" value="<?=$busca['cd_veiculo']?>">
            <tr><td>Nome do Cliente</td><td><input type="text" class="form-control" name="nome_cliente" value="<?=$busca['nm_cliente']?>" size="60" required disabled=""></td></tr>
            <tr><td>CPF</td><td><input type="text" class="form-control" name="cpf_cliente" value="<?=$busca['CLIENTE_cpf_cliente']?>" required disabled=""></td></tr>
            <tr><td>Placa</td><td><input type="text" class="form-control" name="placa" required value="<?=$busca['cd_placa_veiculo']?>"></td></tr>
            <tr><td>Cor</td><td><input type="text" class="form-control" name="cor" size="20" required value="<?=$busca['nm_cor_veiculo']?>"></td></tr>
            <tr><td>Marca</td><td><input type="text" class="form-control" name="marca" size="20" required value="<?=$busca['nm_marca_veiculo']?>"></td></tr>
            <tr><td>Modelo</td><td><input type="text" class="form-control" name="modelo" size="20" required value="<?=$busca['nm_modelo_veiculo']?>"></td></tr>
            <tr><td>Ano</td><td><input type="number" class="form-control" name="ano" min="1970" max="2030" required value="<?=$busca['aa_veiculo']?>"></td></tr>
            
        </table>
        <button class="btn btn-success" type="submit">Atualizar</button>     
    </form> 
    </form>
    <a href="../Views/listar_veiculo.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>

