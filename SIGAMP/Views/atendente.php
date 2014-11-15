<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';

usuarioEstaLogado();
?>
<h1>Bem Vindo!</h1>

<p class="text-success">Você está logado como <u><?=$_SESSION['UsuarioNome']?></u></p>

<ul>
    <li><a href="listar_os.php">Ordens de Serviço</a></li>
    <li><a href="listar_servico.php">Serviço</a><br></li>
    <li><a href="listar_cliente.php">Cliente</a><br></li>
    <li><a href="listar_veiculo.php">Veículo</a><br></li>
    <li><a href="venda.php">Venda</a><br></li>
    <!--<li><a href="listar_item.php">Item</a><br></li>
    <li><a href="#">Manutenção</a></li>-->
    <li><a href="sair.php">Sair</li>
</ul>

<?php
include '../Includes/rodape.php';
?>

