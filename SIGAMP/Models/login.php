<?php
include '../Includes/conecta.php';
include '../CRUDs/banco_usuario.php';
include '../Controllers/logica_usuario.php';


$login = $_POST['login'];
$senha = $_POST['senha'];

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
	$_SESSION["danger"] = "Login e/ou Senha vazio(s)";
	header("Location: ../index.php"); exit;
}

// Validação do usuário/senha digitados
$codificado = sha1($senha);
$usuario = buscaUsuario($conexao, $login, $codificado);
        

if (nroUsuario($conexao, $login, $codificado) != 1) {
	// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	$_SESSION["danger"] = "Login Invalido";
	header("Location: ../index.php");
	die();
} else {
	// Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) {
            session_start();
       }
                        
	// Salva os dados encontrados na sessão
	$_SESSION["UsuarioID"] = $usuario["cd_usuario"];
	$_SESSION["UsuarioNome"] = $usuario["nm_usuario"];
	$_SESSION["UsuarioTipo"] = $usuario["cd_tipo_usuario"];
        
	// Redireciona o visitante
	header("Location: ../Views/acesso.php"); 
        die;
}
