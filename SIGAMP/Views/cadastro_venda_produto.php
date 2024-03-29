<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
include '../CRUDs/banco_produto.php';
include '../CRUDs/banco_servico.php';
verificaUsuario();
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
?>

<center>
    <h2>Lançamento de Vendas</h2>
    <?php if (isset($_SESSION["success"])) { ?>
        <p class="alert-success"><?= $_SESSION["success"] ?></p>
        <?php
        unset($_SESSION["success"]);
    }
    ?>

    <?php if (isset($_SESSION["danger"])) { ?>
        <p class="alert-danger"><?= $_SESSION["danger"] ?></p>
        <?php
        unset($_SESSION["danger"]);
    }
    ?>

</center>
Cliente: <?= $nome ?><br>
CPF: <?= $cpf ?><br><br>

<table class="table table-striped table-bordered">
    <tr><td>Código</td><td>Nome do Produto</td><td>Preço</td><td>Estoque</td><td>Vender</td></tr>

    <?php
    $produtos = listarProdutos($conexao);
    foreach ($produtos as $lista) {
        ?>

        <tr>
            <td><?= $lista['cd_produto'] ?></td>
            <td><?= $lista['nm_produto'] ?></td>
            <td><?= $lista['vl_produto'] ?></td>
            <td><?= $lista['qt_produto'] ?></td>
            <td>
                <?php if ($lista['qt_produto'] <= 0) { ?>
                <button class="btn btn-default">Vender</button>
                <?php
                }else{?>
                
                <a href="../Views/carrinho.php?acao=add&id=<?= $lista['cd_produto'] ?>&nome=<?= $nome ?>&cpf=<?= $cpf ?>&nm_produto=<?= $lista['nm_produto'] ?>&valor=<?= $lista['vl_produto'] ?>"><button class="btn btn-success">Vender</button></a></td>
        </tr>
        <?php
                }
        
                }
    ?>
</table>



<p align="right"><a href="venda.php"><button class="btn btn-info">Finalizar Venda</button></a></p>
