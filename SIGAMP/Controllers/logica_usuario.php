<?php
session_start();

function usuarioEstaLogado(){
	return isset($_SESSION['UsuarioNome']);
}

function verificaUsuario(){
	if(!usuarioEstaLogado()){
		$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade";
		header("Location: ../index.php");
		die();
	}
}

function verificaNivel(){

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

}


function usuarioLogado(){
	return $_SESSION['UsuarioNome'];
}

function logaUsuarios($login){
	$_SESSION['UsuarioNome'] = $login;
}



function logout(){
	session_destroy();
	session_start();

}

