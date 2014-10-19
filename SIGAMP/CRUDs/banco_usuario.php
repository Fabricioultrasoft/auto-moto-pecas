<?php
function buscaUsuario($conexao, $login, $senha){
	$query = "select * from usuario where nm_usuario = '{$login}' and cd_senha_usuario = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;

}


function buscaUsuarioSistema($conexao, $id){
	$query = "select * from usuario where cd_usuario = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}


function nroUsuario($conexao, $login, $senha){
	$query = "select * from usuario where nm_usuario = '{$login}' and cd_senha_usuario = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$linha = mysqli_num_rows($resultado);
	return $linha;

}

function insereUsuario($conexao, $nome, $cpf, $senha, $nivel){
    $query = "insert into usuario (cpf_usuario, nm_usuario, cd_senha_usuario, cd_tipo_usuario) VALUES({$cpf},'{$nome}','{$senha}',{$nivel})";
    return mysqli_query($conexao,$query);
}

function listarUsuarios($conexao){
	$usuarios = array();
	$query = "select * from usuario order by cd_usuario";
	$resultado = mysqli_query($conexao, $query);
	while($usuario = mysqli_fetch_assoc($resultado)){
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}


function alterarUsuario($conexao,$id,$nome,$cpf,$senha, $nivel){
        $query = "update usuario set nm_usuario='{$nome}',cpf_usuario='{$cpf}',cd_senha_usuario='{$senha}',cd_tipo_usuario={$nivel} where cd_usuario = {$id}";
	return mysqli_query($conexao, $query);
}

function removeUsuario($conexao, $id){
	$query = "delete from usuario where cd_usuario = {$id}";
	return mysqli_query($conexao,$query);
}