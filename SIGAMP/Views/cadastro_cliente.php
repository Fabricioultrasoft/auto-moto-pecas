<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
?>
 <script type="text/javascript">
    
/*function formatar(mascara, documento){
	
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}*/
//adiciona mascara ao CPF
function MascaraCPF(cpf){
	if(mascaraInteiro(cpf)==false){
		event.returnValue = false;
	}	
	return formataCampo(cpf, '000.000.000-00', event);
}
//valida o CPF digitado
function ValidarCPF(Objcpf){
	var cpf = Objcpf.value;
	exp = /\.|\-/g
	cpf = cpf.toString().replace( exp, "" ); 
	var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10));
	var soma1=0, soma2=0;
	var vlr =11;
	
	for(i=0;i<9;i++){
		soma1+=eval(cpf.charAt(i)*(vlr-1));
		soma2+=eval(cpf.charAt(i)*vlr);
		vlr--;
	}	
	soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11));
	soma2=(((soma2+(2*soma1))*10)%11);
	
	var digitoGerado=(soma1*10)+soma2;
	if(digitoGerado!=digitoDigitado)	
		alert('CPF Invalido!');		
}
</script>

<center>
    <h2>Cadastro de Clientes</h2>
    <form action="../Models/enviar_cliente.php" method="post">
        <table border="0" class="table">
            <tr><td>Nome do Cliente</td><td><input type="text" class="form-control" name="nome_cliente" size="60" required></td></tr>
            <tr><td>CPF do Cliente</td><td><input type="number" min="1111111111" max="99999999999" onblur="ValidarCPF(form1.cpf_usuario)" OnKeyPress="MascaraCPF(form1.cpf_usuario);" class="form-control" name="cpf_cliente" size="60" required></td></tr>
            <tr><td>RG do Cliente</td><td><input type="number" class="form-control" name="rg_cliente" min="1111111" max="999999999" size="20" required></td></tr>
            <tr><td>Data de Nascimento</td><td><input type="date" class="form-control" min="1920-12-31" max="1996-01-01" name="aniversario_cliente" placeholder="DD/MM/AAAA" size="20" required></td></tr>
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
            <tr><td>Telefone Fixo</td><td><input type="number" min="0000000000" max="9999999999" class="form-control" name="tel_cliente" size="60" required></td></tr>
            <tr><td>Telefone Celular</td><td><input type="number" min="00000000000" max="99999999999" class="form-control" name="cel_cliente" size="60"></td></tr>
            <tr><td>E-Mail do Cliente</td><td><input type="email" class="form-control" name="email_cliente" size="60"></td></tr>
        </table>
        <button class="btn btn-success" type="submit">Cadastrar</button>     
    </form>
    <a href="listar_cliente.php">Voltar</a>
</center>
<?php
include '../Includes/rodape.php';
?>

