<?php
include 'Includes/conecta.php';
?>
<html lang="pt-br">
    <head>
        <title>SIGAMP - Sistema de Gerenciamento de Auto Moto Peças</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Scripts/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Scripts/css/style.css">
    </head>
    <?php
include './Controllers/logica_usuario.php';

if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}

if(isset($_SESSION["danger"])){?>
	<p class="alert-danger"><?=$_SESSION["danger"]?> </p>
<?php
	unset($_SESSION["danger"]);
}
?>
    
    <body class="login">
    <fieldset id="acesso">
        <h1>Login</h1>
    <br/><br/>
    <form action="Models/login.php" method="post">       
            <table border="0" class="table">
                <tr><td><font color="black">Login</font></td><td><input type="text" name="login" class="form-control" id="form_login" placeholder="Seu nome de usuário"></td></tr>
                <tr><td><font color="black">Senha</font></td><td><input type="password" name="senha" class="form-control" id="form_login" placeholder="Sua senha de acesso"></td></tr>
                <tr><td colspan="2"><div align="right"><button class="btn btn-primary">Logar</button></div></td></tr>
            </table>
        </fieldset>    
    </form>
    </body>
</html>
<?php
require 'Includes/rodape.php';
?>
