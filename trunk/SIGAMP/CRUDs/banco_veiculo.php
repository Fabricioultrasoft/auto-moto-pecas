<?php
function insereVeiculo($conexao, $nome, $cpf, $placa, $cor, $modelo, $marca, $ano){
    $query = "insert into veiculo (nm_cliente, cpf_cliente, nm_cor_veiculo, cd_placa_veiculo, nm_modelo_veiculo, nm_marca_veiculo, aa_veiculo)VALUES('{$nome}','{$cpf}','{$cor}','{$placa}','{$modelo}','{$marca}','{$ano}')";
    return mysqli_query($conexao,$query);
}

function listarVeiculos($conexao){
	$veiculos = array();
	$query = "select * from veiculo order by nm_modelo_veiculo";
	$resultado = mysqli_query($conexao, $query);
	while($veiculo = mysqli_fetch_assoc($resultado)){
            array_push($veiculos, $veiculo);
	}
	return $veiculos;
}

function buscaVeiculo($conexao, $id){
	$query = "select * from veiculo where cd_veiculo = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarVeiculo($conexao,$id,$placa,$cor,$marca,$modelo,$ano){
        $query = "update veiculo set cd_placa_veiculo='{$placa}',nm_cor_veiculo='{$cor}',nm_marca_veiculo='{$marca}',nm_modelo_veiculo='{$modelo}',aa_veiculo={$ano} where cd_veiculo = {$id}";
	return mysqli_query($conexao, $query);
}

function removeVeiculo($conexao, $id){
	$query = "delete from veiculo where cd_veiculo = {$id}";
	return mysqli_query($conexao,$query);
}