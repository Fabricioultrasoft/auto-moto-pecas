<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

?>
<form action="../Models/busca_Cliente_Venda.php" method="post">
    CPF <input type="text" name="cpf" placeholder="Somente Números" required=""> <button class="btn btn-primary" type="submit">Buscar</button><br>
    <a href="listar_venda.php">Página Principal</a>
    <hr>
</form>
<?php

if(isset($_GET["cliente"]) && $_GET["cliente"] == "true"){
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];    
?>
<center>
    <h2>Lançamento de Vendas</h2>
    <form action="../Models/enviar_venda.php" method="post">
        <table border="0" class="table">
            <tr><td>Nome do Cliente</td><td><input type="text" class="form-control" name="nome_cliente" value="<?=$nome?>" size="60" required></td></tr>
            <tr><td>CPF</td><td><input type="number" class="form-control" name="cpf_cliente" min="1" max="99999999999" value="<?=$cpf?>" size="11" required></td></tr>
            <tr><td>Valor Total</td><td><input type="number" step="any" class="form-control" name="total" min="1" required></td></tr>
        </table>
        <button class="btn btn-success" type="submit">Cadastrar</button>     
    </form>
    <a href="listar_venda.php">Página Principal</a>
</center>
<?php
}
include '../Includes/rodape.php';



