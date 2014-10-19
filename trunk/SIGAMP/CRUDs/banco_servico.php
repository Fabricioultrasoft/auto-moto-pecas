<?php
function insereServico($conexao, $nome, $preco){
    $query = "insert into servico (nm_servico, vl_servico) VALUES('{$nome}',{$preco})";
    return mysqli_query($conexao,$query);
}

function listarServicos($conexao){
	$servicos = array();
	$query = "select * from servico order by cd_servico";
	$resultado = mysqli_query($conexao, $query);
	while($servico = mysqli_fetch_assoc($resultado)){
		array_push($servicos, $servico);
	}
	return $servicos;
}

function buscaServico($conexao, $id){
	$query = "select * from servico where cd_servico = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarServico($conexao,$id,$nome,$preco){
        $query = "update servico set nm_servico='{$nome}',vl_servico={$preco} where cd_servico = {$id}";
	return mysqli_query($conexao, $query);
}

function removeServico($conexao, $id){
	$query = "delete from servico where cd_servico = {$id}";
	return mysqli_query($conexao,$query);
}