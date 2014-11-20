<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';

usuarioEstaLogado();
?>

<center>
<h1>Bem Vindo!</h1>

<p class="text-success">Você está logado como <u><?=$_SESSION['UsuarioNome']?></u></p><br><br>

    <a href="listar_os.php"><button class="btn btn-primary" title="Lança OS no sistema">Ordens de Serviço</button></a> 
    <a href="listar_servico.php"><button class="btn btn-primary" title="CRUD Serviço">Serviço</button></a><br><br><br>
    <a href="listar_cliente.php"><button class="btn btn-primary" title="CRUD Cliente">Cliente</button></a> 
    <a href="listar_veiculo.php"><button class="btn btn-primary" title="CRUD Veículo">Veículo</button></a> 
    <a href="venda.php"><button class="btn btn-primary" title="CRUD Vendas">Venda</button></a> 
    <!--<li><a href="listar_item.php">Item</a><br></li>
    <li><a href="#">Manutenção</a></li>-->
    <a href="sair.php"><button class="btn btn-danger" title="Sair do Sistema">Sair</button></a> 
</center>

<?php
include '../Includes/rodape.php';
?>

