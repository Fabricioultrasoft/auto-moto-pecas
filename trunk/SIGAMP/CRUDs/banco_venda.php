<?php
function insereVenda($conexao, $nome, $id, $data, $hora,$cpf, $nm_prod, $total, $usuario){
    $query = "insert into venda (CLIENTE_nm_cliente,PRODUTO_cd_produto, dt_venda, hr_venda, CLIENTE_cpf_cliente, PRODUTO_nm_produto, PRODUTO_vl_produto, USUARIO_nm_usuario) VALUES('{$nome}',{$id},'{$data}','{$hora}','{$cpf}','{$nm_prod}',{$total},'{$usuario}')";
    return mysqli_query($conexao,$query);
}

function listarVendas($conexao){
	$vendas = array();
	$query = "select * from venda order by dt_venda desc";
	$resultado = mysqli_query($conexao, $query);
	while($venda = mysqli_fetch_assoc($resultado)){
            array_push($vendas, $venda);
	}
	return $vendas;
}

function listarVendasProduto($conexao){
	$vendas = array();
	$query = "select * from venda order by PRODUTO_nm_produto";
	$resultado = mysqli_query($conexao, $query);
	while($venda = mysqli_fetch_assoc($resultado)){
            array_push($vendas, $venda);
	}
	return $vendas;
}

function listarVendasValor($conexao){
	$vendas = array();
	$query = "select * from venda order by PRODUTO_vl_produto desc";
	$resultado = mysqli_query($conexao, $query);
	while($venda = mysqli_fetch_assoc($resultado)){
            array_push($vendas, $venda);
	}
	return $vendas;
}

function listarVendasUsuario($conexao){
	$vendas = array();
	$query = "select * from venda order by USUARIO_nm_usuario";
	$resultado = mysqli_query($conexao, $query);
	while($venda = mysqli_fetch_assoc($resultado)){
            array_push($vendas, $venda);
	}
	return $vendas;
}

function listarVendasCliente($conexao){
	$vendas = array();
	$query = "select * from venda order by CLIENTE_nm_cliente";
	$resultado = mysqli_query($conexao, $query);
	while($venda = mysqli_fetch_assoc($resultado)){
            array_push($vendas, $venda);
	}
	return $vendas;
}



function buscaVenda($conexao, $id){
	$query = "select * from venda where cd_venda = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarVenda($conexao,$id,$total,$data,$usuario){
        $query = "update venda set dt_venda='{$data}',USUARIO_cd_usuario='{$usuario}',vl_total_servico_produto_venda={$total} where cd_venda = {$id}";
	return mysqli_query($conexao, $query);
}

function removeVenda($conexao, $id){
	$query = "delete from venda where cd_venda = {$id}";
	return mysqli_query($conexao,$query);
}