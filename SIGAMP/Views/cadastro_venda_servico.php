<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
include '../CRUDs/banco_produto.php';
include '../CRUDs/banco_servico.php';
include '../CRUDs/banco_veiculo.php';
include '../CRUDs/banco_ordem.php';
verificaUsuario();
$cpf = $_GET['cpf'];
?>

<center>
<h2>Lançamento de Ordem de Serviço</h2>
<?php
if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}
?>

<?php
if(isset($_SESSION["danger"])){?>
	<p class="alert-danger"><?=$_SESSION["danger"]?></p>
<?php
	unset($_SESSION["danger"]);
}
?>
        
</center>
<?php $veiculo = buscaVeiculoServico($conexao, $cpf)?>
<form action="../Models/gerar_OS.php" method="post">
    <input type="hidden" name="nome" value="<?=$veiculo['nm_cliente']?>"> 
    <input type="hidden" name="cpf" value="<?=$cpf?>">
    <input type="hidden" name="veiculo" value="<?=$veiculo['nm_marca_veiculo']." ".$veiculo['nm_modelo_veiculo']." ".$veiculo['nm_cor_veiculo']?>">
    Cliente: <?=$veiculo['nm_cliente']?><br>
    CPF: <?=$cpf?><br>
    Veículo: <?=$veiculo['nm_marca_veiculo']." ".$veiculo['nm_modelo_veiculo']." ".$veiculo['nm_cor_veiculo']?><br>
    Descrição: <textarea name="desc" rows="10" cols="100" class="form-control" required=""></textarea><br>
<p align="right"><button type="submit" class="btn btn-info">Gerar OS</button></a></p>
</form>
