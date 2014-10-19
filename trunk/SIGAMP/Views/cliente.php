<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h1>CRUD CLIENTE</h1><br>
<a href="cadastro_cliente.php"><button class="btn btn-info">Cadastrar Clientes</button></a>
<a href="listar_cliente.php"><button class="btn btn-info">Listar Clientes</button></a>
<a href="atualizar_cliente.php"><button class="btn btn-info">Atualizar Clientes</button></a>
<a href="deletar_cliente.php"><button class="btn btn-danger">Deletar Clientes</button></a>
</center>

<a href="acesso.php">Voltar</a>
<?php
include '../Includes/rodape.php';
?>

