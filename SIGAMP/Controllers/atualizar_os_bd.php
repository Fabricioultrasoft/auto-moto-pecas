<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_ordem.php';
include 'logica_usuario.php';
verificaUsuario();
$id = $_GET['id'];
$busca = buscaOrdem($conexao, $id)

?>

<center>
    <h2>Atualização da Ordem de Serviço nº <?=$busca['SERVICO_cd_servico']?></h2>
    <hr>
</center>
        <form action="../Models/atualizar_os.php" method="post">
            <input type="hidden" name="id" value="<?=$busca['SERVICO_cd_servico']?>"> 
            <input type="hidden" name="nome" value="<?=$busca['CLIENTE_nm_cliente']?>"> 
            <input type="hidden" name="cpf" value="<?=$busca['CLIENTE_cpf_cliente']?>">
            <input type="hidden" name="veiculo" value="<?=$busca['VEICULO_nm_veiculo']?>">
            <b>Cliente: </b> <?=$busca['CLIENTE_nm_cliente']?><br>
            <b>CPF: </b><?=$busca['CLIENTE_cpf_cliente']?><br>
            <b>Veículo: </b><?=$busca['VEICULO_nm_veiculo']?><br>
            <b>Descrição: </b><textarea name="desc" rows="10" cols="100" class="form-control" required=""><?=$busca['ds_manutencao']?></textarea><br>
            <p align="right"><button class="btn btn-success" type="submit">Atualizar</button></p>
        </form>
    <a href="../Views/listar_os.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>

