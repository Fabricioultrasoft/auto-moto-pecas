<?php
function insereProduto($conexao, $nome, $fabricante, $qtdd, $preco, $desc){
    $query = "insert into produto (nm_produto, nm_fabricante_produto, qt_produto, vl_produto, ds_produto) VALUES('{$nome}','{$fabricante}',{$qtdd},{$preco},'{$desc}')";
    return mysqli_query($conexao,$query);
}

function listarProdutos($conexao){
	$produtos = array();
	$query = "select * from produto order by cd_produto";
	$resultado = mysqli_query($conexao, $query);
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}
	return $produtos;
}

function buscaProduto($conexao, $id){
	$query = "select * from produto where cd_produto = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarProduto($conexao,$id,$nome,$fabricante,$qtd, $preco, $desc){
        $query = "update produto set nm_produto='{$nome}',nm_fabricante_produto='{$fabricante}',qt_produto={$qtd},vl_produto={$preco},ds_produto='{$desc}' where cd_produto = {$id}";
	return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id){
	$query = "delete from produto where cd_produto = {$id}";
	return mysqli_query($conexao,$query);
}