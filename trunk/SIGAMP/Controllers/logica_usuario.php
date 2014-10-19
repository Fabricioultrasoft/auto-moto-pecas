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

function verificaNivel($conexao,$login, $senha){

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

