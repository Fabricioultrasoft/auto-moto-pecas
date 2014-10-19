<?php
function insereCliente($conexao, $nome, $cpf, $rg, $nacto, $endereco, $cidade, $estado, $tel, $cel, $email){
    $query = "insert into cliente (cpf_cliente, nm_cliente, dt_nascimento_cliente, cd_registro_geral_cliente, nm_endereco_cliente, nm_cidade_cliente, sg_estado_cliente, cd_telefone_um_cliente, cd_telefone_dois_cliente,nm_email_cliente) VALUES('{$cpf}','{$nome}','{$nacto}','{$rg}','{$endereco}','{$cidade}','{$estado}','{$tel}','{$cel}','{$email}')";
    return mysqli_query($conexao,$query);
}

function listarClientes($conexao){
	$clientes = array();
	$query = "select * from cliente order by nm_cliente";
	$resultado = mysqli_query($conexao, $query);
	while($cliente = mysqli_fetch_assoc($resultado)){
            array_push($clientes, $cliente);
	}
	return $clientes;
}

function buscaCliente($conexao, $id){
	$query = "select * from cliente where cpf_cliente = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarCliente($conexao, $nome, $cpf, $rg, $data, $endereco, $cidade, $estado, $tel, $cel, $email){
        $query = "update cliente set nm_cliente='{$nome}',dt_nascimento_cliente='{$data}',cd_registro_geral_cliente='{$rg}',nm_endereco_cliente='{$endereco}',nm_cidade_cliente='{$cidade}',sg_estado_cliente='{$estado}',cd_telefone_um_cliente='{$tel}',cd_telefone_dois_cliente='{$cel}',nm_email_cliente='{$email}' where cpf_cliente = '{$cpf}'";
	return mysqli_query($conexao, $query);
}

function removeCliente($conexao, $id){
	$query = "delete from cliente where cpf_cliente = {$id}";
	return mysqli_query($conexao,$query);
}