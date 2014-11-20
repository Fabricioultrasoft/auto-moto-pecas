<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_usuario.php';
include 'logica_usuario.php';
verificaUsuario();
$id = $_GET['id'];
$busca = buscaUsuarioSistema($conexao, $id)

?>

<center>
    <h2>Atualização de Dados de Usuarios</h2>
<form action="../Models/atualizar_usuario.php" method="post">
        <table border="0" class="table">
            <input type="hidden" name="id" value="<?=$busca['cd_usuario']?>">
            <tr><td>Nome de Usuário</td><td><input type="text" class="form-control" maxlength="40" name="nome_usuario" size="60" value="<?=$busca['nm_usuario']?>" required></td></tr>
            <tr><td>CPF do Usuário</td><td><input type="number" min="1111111111" max="99999999999" class="form-control" name="cpf_usuario" size="60" value="<?=$busca['cpf_usuario']?>" required></td></tr>
            <tr><td>Senha</td><td><input type="password" class="form-control" name="senha_usuario" min="1" size="20" value="<?=$busca['cd_senha_usuario']?>" required></td></tr>
            <tr><td>Nivel de Acesso</td><td>
                    <select name="nv_acesso" class="form-control">
                        <option value="1">Administrativo</option>
                        <option value="2">Gerencial</option>
                        <option value="3" selected="">Atendimento</option>
                        <option value="4">Auxiliar</option>
                    </select>
                </td></tr>
        </table>
        <button class="btn btn-success" type="submit">Atualizar</button>     
    </form> 
    </form>
    <a href="../Views/listar_usuario.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>

