<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h1>CRUD USUÁRIOS</h1><br>
<a href="cadastro_usuario.php"><button class="btn btn-info">Cadastrar Usuários</button></a>
<a href="listar_usuario.php"><button class="btn btn-info">Listar Usuários</button></a>
<a href="atualizar_usuario.php"><button class="btn btn-info">Atualizar Usuários</button></a>
<a href="deletar_usuario.php"><button class="btn btn-danger">Deletar Usuários</button></a>
</center>

<a href="acesso.php">Voltar</a>
<?php
include '../Includes/rodape.php';
?>