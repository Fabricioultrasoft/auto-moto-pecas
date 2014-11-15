<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_usuario.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
verificaNivel();
?>

<center>
<h2>Lista de Usuarios</h2>
<?php
if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}
?>
<p align="right"><a href="cadastro_usuario.php"><button class="btn btn-info">Cadastrar</button></a></p>

<table class="table table-striped table-bordered">
    <tr><td>Código</td><td>Nome do Usuario</td><td>CPF do Usuário</td><td>Nível de Acesso</td><td>Atualizar</td><td>Deletar</td></tr>
        <?php
            $usuarios = listarUsuarios($conexao);
            foreach($usuarios as $lista){
	?>
    <tr>
	<td><?=$lista['cd_usuario']?></td>
	<td><?=$lista['nm_usuario']?></td>
	<td><?=$lista['cpf_usuario']?></td>
	<td>
        <?php
            if($lista['cd_tipo_usuario'] == 1){
		echo("Administrativo");
            }elseif($lista['cd_tipo_usuario'] == 2){
		echo("Gerencial");
            }elseif($lista['cd_tipo_usuario'] == 3){
		echo("Atendimento");
            }elseif($lista['cd_tipo_usuario'] == 4){
                echo("Auxiliar");
            }
	?>        
        </td>
        <td><a href="../Controllers/atualizar_usuario_bd.php?id=<?=$lista['cd_usuario']?>"><button class="btn btn-info">Atualizar</button></a></td>
        <td><a href="../Models/deletar_usuario_bd.php?id=<?=$lista['cd_usuario']?>"><button class="btn btn-danger">Deletar</button></a></td>
    </tr>
    <?php
        }
    ?>
	</table>
</center>
<a href="acesso.php">Pagina Principal</a>

<?php
include '../Includes/rodape.php';
?>


