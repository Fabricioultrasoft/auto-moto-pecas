<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();

?>
<form action="../Models/busca_Cliente_Venda.php" method="post">
    CPF <input type="number" name="cpf" placeholder="Somente Números" required=""> <button class="btn btn-primary" type="submit">Buscar</button><br>
    <a href="listar_venda.php">Página Principal</a>
</form>

<?php

include '../Includes/rodape.php';



