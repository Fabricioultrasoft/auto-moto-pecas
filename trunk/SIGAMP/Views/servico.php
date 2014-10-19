<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h1>CRUD SERVIÇOS</h1><br>
<a href="cadastro_servico.php"><button class="btn btn-info">Cadastrar Serviços</button></a>
<a href="listar_servico.php"><button class="btn btn-info">Listar Serviços</button></a>
<a href="atualizar_servico.php"><button class="btn btn-info">Atualizar Serviços</button></a>
<a href="deletar_servico.php"><button class="btn btn-danger">Deletar Serviços</button></a>
</center>

<a href="acesso.php">Voltar</a>
<?php
include '../Includes/rodape.php';
?>




