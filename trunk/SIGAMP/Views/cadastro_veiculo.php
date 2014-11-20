<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

?>
<form action="../Models/buscar_Cliente.php" method="post">
    CPF <input type="text" name="cpf" placeholder="Somente Números" required=""> <button class="btn btn-primary" type="submit">Buscar</button><br>
    <a href="listar_veiculo.php">Página Principal</a>
    <hr>
</form>
<?php

if(isset($_GET["cliente"]) && $_GET["cliente"] == "true"){
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];    
?>
<center>
    <h2>Cadastro de Veiculos</h2>
    <form action="../Models/enviar_veiculo.php" method="post">
        <table border="0" class="table">
            <tr><td>Nome do Cliente</td><td><input type="text" class="form-control" name="nome_cliente" value="<?=$nome?>" size="60" required></td></tr>
            <tr><td>CPF do Cliente</td><td><input type="number" min="1111111111" max="99999999999" class="form-control" name="cpf_cliente" value="<?=$cpf?>" size="60" required></td></tr>
            <tr><td>Placa</td><td><input type="text" class="form-control" name="placa" required></td></tr>
            <tr><td>Cor</td><td><input type="text" class="form-control" name="cor" size="20" required></td></tr>
            <tr><td>Marca</td><td><input type="text" class="form-control" name="marca" size="20" required></td></tr>
            <tr><td>Modelo</td><td><input type="text" class="form-control" name="modelo" size="20" required></td></tr>
            <tr><td>Ano</td><td><input type="number" class="form-control" name="ano" min="1970" max="2030" required></td></tr>
            
        </table>
        <button class="btn btn-success" type="submit">Cadastrar</button>     
    </form>
    <a href="listar_veiculo.php">Página Principal</a>
</center>
<?php
}
include '../Includes/rodape.php';

