<?php
function insereOrdem($conexao, $nome, $data, $descricao, $veiculo, $cpf){
    $query = "insert into manutencao (CLIENTE_nm_cliente, VENDA_dt_venda, ds_manutencao, VEICULO_nm_veiculo, CLIENTE_cpf_cliente)VALUES('{$nome}','{$data}','{$descricao}','{$veiculo}','{$cpf}')";
    return mysqli_query($conexao,$query);
}

function listarOS($conexao){
	$ordens = array();
	$query = "select * from manutencao where st_servico = 1 order by SERVICO_cd_servico";
	$resultado = mysqli_query($conexao, $query);
	while($manutencao = mysqli_fetch_assoc($resultado)){
		array_push($ordens, $manutencao);
	}
	return $ordens;
}

function listarOSBaixadas($conexao){
	$ordens = array();
	$query = "select * from manutencao where st_servico = 0 order by SERVICO_cd_servico";
	$resultado = mysqli_query($conexao, $query);
	while($manutencao = mysqli_fetch_assoc($resultado)){
		array_push($ordens, $manutencao);
	}
	return $ordens;
}


function baixaOrdem($conexao,$id){
        $query = "update manutencao set st_servico = 0 where SERVICO_cd_servico = {$id}";
	return mysqli_query($conexao, $query);
}

function reativarOrdem($conexao,$id){
        $query = "update manutencao set st_servico = 1 where SERVICO_cd_servico = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaOrdem($conexao, $id){
	$query = "select * from manutencao where SERVICO_cd_servico = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarOrdem($conexao,$id,$desc){
        $query = "update manutencao set ds_manutencao='{$desc}' where SERVICO_cd_servico = {$id}";
	return mysqli_query($conexao, $query);
}

function removeOrdem($conexao, $id){
	$query = "delete from manutencao where SERVICO_cd_servico = {$id}";
	return mysqli_query($conexao,$query);
}