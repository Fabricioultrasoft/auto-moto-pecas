<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>

<center>
    <h2>Cadastro de Clientes</h2>
    <form action="../Models/enviar_cliente.php" method="post">
        <table border="0" class="table">
            <tr><td>Nome do Cliente</td><td><input type="text" class="form-control" name="nome_cliente" size="60" required></td></tr>
            <tr><td>CPF do Cliente</td><td><input type="number" class="form-control" name="cpf_cliente" size="60" required></td></tr>
            <tr><td>RG do Cliente</td><td><input type="number" class="form-control" name="rg_cliente" min="1" size="20" required></td></tr>
            <tr><td>Data de Nascimento</td><td><input type="date" class="form-control" name="aniversario_cliente" placeholder="DD/MM/AAAA" size="20" required></td></tr>
            <tr><td>Endereço do Cliente</td><td><input type="text" class="form-control" name="endereco_cliente" size="60" required></td></tr>
            <tr><td>Cidade</td><td><input type="text" class="form-control" name="cidade_cliente" size="60" required></td></tr>
            <tr><td>Estado</td><td>
                    <select name="estado_cliente" class="form-control">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP" selected="">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        
                    </select>    
                </td></tr>
            <tr><td>Telefone Fixo</td><td><input type="tel" class="form-control" name="tel_cliente" size="60" required placeholder="(XX)XXXX-XXXX"></td></tr>
            <tr><td>Telefone Celular</td><td><input type="tel" class="form-control" name="cel_cliente" size="60" placeholder="(XX)XXXX-XXXX"></td></tr>
            <tr><td>E-Mail do Cliente</td><td><input type="email" class="form-control" name="email_cliente" size="60"></td></tr>
        </table>
        <button class="btn btn-success" type="submit">Cadastrar</button>     
    </form>
    <a href="cliente.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>

