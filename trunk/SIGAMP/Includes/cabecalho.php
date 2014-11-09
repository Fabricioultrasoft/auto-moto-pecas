<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>SIGAMP - Sistema Gerenciador de Auto Moto Peças</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../Scripts/css/bootstrap.css">
    <script type="text/javascript" src="../Scripts/javaScript/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../Scripts/javaScript/jquery.maskedinput.min.js"/></script>
   <script type="text/javascript">
		$(function() {
			$('input[@name=data]').mask('99/99/9999');
			$('input[@name=cep]').mask('99999-999');
			$('input[@name=cpf_cliente]').mask('999.999.999-99');
			$('input[@name=placa_veiculo]').mask('aaa-9999');
                        
		});
	</script>

</head>
<body>