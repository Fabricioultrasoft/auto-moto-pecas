<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';


// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) {session_start();}

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION["UsuarioID"]) or $_SESSION["UsuarioTipo"] <= 0){
	// Destrói a sessão por segurança
	session_destroy();
	session_start();
	$_SESSION["danger"] = "Somente ADM pode ter acesso a página";
	// Redireciona o visitante de volta pro login
	header("Location: ../index.php"); exit;
}else if($_SESSION['UsuarioTipo'] == 2){
	//Redireciona para nivel de gerente
	header("Location: gerente.php");
}else if($_SESSION['UsuarioTipo'] == 3){
	//Redireciona para nivel de atendente
	header("Location: atendente.php");
}else if($_SESSION['UsuarioTipo'] == 4){
	//Redireciona para nivel de mecanico
	header("Location: mecanico.php");
}
?>
<?php
usuarioEstaLogado();
?>
<h1>Bem Vindo!</h1>

<p class="text-success">Você está logado como <u><?=$_SESSION['UsuarioNome']?></u></p>

<ul>
    <li><a href="produto.php">Produto</a><br></li>
    <li><a href="servico.php">Serviço</a><br></li>
    <li><a href="usuario.php">Usuário</a><br></li>
    <li><a href="cliente.php">Cliente</a><br></li>
    <li><a href="#">Veículo</a><br></li>
    <li><a href="#">Venda</a><br></li>
    <li><a href="#">Item</a><br></li>
    <li><a href="#">Manutenção</a></li>
    <li><a href="sair.php">Sair</li>
</ul>

<?php
include '../Includes/rodape.php';
?>
