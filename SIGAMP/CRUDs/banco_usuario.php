<?php
function buscaUsuario($conexao, $login, $senha){
	$query = "select * from usuario where nm_usuario = '{$login}' and cd_senha_usuario = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;

}

function nroUsuario($conexao, $login, $senha){
	$query = "select * from usuario where nm_usuario = '{$login}' and cd_senha_usuario = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$linha = mysqli_num_rows($resultado);
	return $linha;

}
