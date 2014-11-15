<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
verificaNivel();
?>

<center>
    <h2>Cadastro de Usuário</h2>
    <form action="../Models/enviar_usuario.php" method="post">
        <table border="0" class="table">
            <tr><td>Nome de Usuário</td><td><input type="text" class="form-control" maxlength="40" name="nome_usuario" size="60" required></td></tr>
            <tr><td>CPF do Usuário</td><td><input type="number" min="1" max="99999999999" class="form-control" name="cpf_usuario" size="60" required></td></tr>
            <tr><td>Senha</td><td><input type="password" class="form-control" name="senha_usuario" min="1" size="20" required></td></tr>
            <tr><td>Nivel de Acesso</td><td>
                    <select name="nv_acesso" class="form-control">
                        <option value="1">Administrativo</option>
                        <option value="2">Gerencial</option>
                        <option value="3" selected="">Atendimento</option>
                        <option value="4">Auxiliar</option>
                    </select>
                </td></tr>
        </table>
        <button class="btn btn-success" type="submit">Cadastrar</button>     
    </form>
    <a href="listar_usuario.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>
