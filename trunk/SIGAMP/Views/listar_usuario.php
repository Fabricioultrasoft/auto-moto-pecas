<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_usuario.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
<h2>Lista de Usuarios</h2>

<table class="table table-striped table-bordered">
    <tr><td>Código</td><td>Nome do Usuario</td><td>CPF do Usuário</td><td>Senha do Usuário</td><td>Nível de Acesso</td></tr>
        <?php
            $usuarios = listarUsuarios($conexao);
            foreach($usuarios as $lista){
	?>
    <tr>
	<td><?=$lista['cd_usuario']?></td>
	<td><?=$lista['nm_usuario']?></td>
	<td><?=$lista['cpf_usuario']?></td>
	<td><?=$lista['cd_senha_usuario']?></td>
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
        </td></tr>
    <?php
        }
    ?>
	</table>
</center>
<a href="usuario.php">Voltar</a>

<?php
include '../Includes/rodape.php';
?>


