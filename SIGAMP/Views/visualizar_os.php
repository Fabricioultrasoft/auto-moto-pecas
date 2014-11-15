<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../CRUDs/banco_ordem.php';
include '../Controllers/logica_usuario.php';
verificaUsuario();
$id = $_GET['id'];
$relatorio = buscaOrdem($conexao, $id);
?>
<center>
<h3>Relatório da Ordem de Serviço nº <?=$relatorio['SERVICO_cd_servico']?></h3>
</center>
<b>Número da Ordem:</b> <?=$relatorio['SERVICO_cd_servico']?><br><br>
<b>Nome do Cliente:</b> <?=$relatorio['CLIENTE_nm_cliente']?><br><br>
<b>Data da Abertura da OS:</b> <?=$relatorio['VENDA_dt_venda']?><br><br>
<b>Caracteristicas do Veículo:</b> <?=$relatorio['VEICULO_nm_veiculo']?><br><br>
<b>Status do Serviço:</b> 
         <?php 
            if($relatorio['st_servico'] == 1){
                echo 'Em Andamento';
            }else{
                echo 'Concluído';
            }
            ?>
        
        <br><br>
<b>Descrição da Ordem de Serviço:</b><br> <?=$relatorio['ds_manutencao']?><br>
<br><br>
<p align="right"><a href="../Models/finalizando_os.php?id=<?=$relatorio['SERVICO_cd_servico']?>"><button class="btn btn-success">Finalizar Ordem</button></a></p>
<a href="listar_os.php">Voltar a lista de Ordens</a>
<?php
include '../Includes/rodape.php';
?>
