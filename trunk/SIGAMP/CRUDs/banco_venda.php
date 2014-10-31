<?php
function insereVenda($conexao, $data, $cpf, $total, $usuario){
    $query = "insert into venda (dt_venda, USUARIO_cd_usuario, CLIENTE_cpf_cliente,vl_total_servico_produto_venda)VALUES('{$data}','{$usuario}','{$cpf}',{$total})";
    return mysqli_query($conexao,$query);
}

function listarVendas($conexao){
	$vendas = array();
	$query = "select * from venda order by dt_venda";
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