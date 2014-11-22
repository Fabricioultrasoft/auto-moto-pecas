<?php
include '../Includes/conecta.php';
include '../Includes/cabecalho.php';
include '../Controllers/logica_usuario.php';
include '../CRUDs/banco_produto.php';
include '../CRUDs/banco_servico.php';
verificaUsuario();

$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
  


if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

//adicionar produto

if (isset($_GET['acao'])) {

    //adicionar produto
    if ($_GET['acao'] == 'add') {
        $id = intval($_GET['id']);
        if (!isset($_SESSION['carrinho'][$id])) {
            $_SESSION['carrinho'][$id] = 1;
        } else {
            $_SESSION['carrinho'][$id] += 1;
        }
    }
    
    //remover produto
    if ($_GET['acao'] == 'del') {
        $id = intval($_GET['id']);
        if (isset($_SESSION['carrinho'][$id])) {
            unset($_SESSION['carrinho'][$id]);
        }
    }
    
    //alterando produto
    
    if($_GET['acao'] == 'up'){
        if(is_array($_POST['prod'])){
            foreach ($_POST['prod'] as $id => $qtd){
                $id = intval($id);
                $qtd = intval($qtd);
                if(!empty($qtd) || $qtd <> 0){
                    $_SESSION['carrinho'][$id] = $qtd;
                }else{
                    unset($_SESSION['carrinho'][$id]);
                }
            }
        }
    }
}

$total = 0;
$soma = 0;

//print_r($_SESSION['carrinho']);
?>

<center>
    <table border="0" class="table">
        <caption><h2>Lista de Produtos Adicionados</h2></caption>
    <thead>
        
        <tr>
            <th><p align="center">Produto</p></th>
            <th><p align="center">Preço Unitário</p></th>
            <th><p align="center">Quantidade</p></th>
            <th><p align="center">Preço Total</p></th>
            <th><p align="center">Remover</p></th>
        </tr>
        
    </thead>
    <form action="?acao=up&nome=<?=$nome?>&cpf=<?=$cpf?>" method="post">
        <input type="hidden" name="nome" value="<?=$nome?>">
        <input type="hidden" name="cpf" value="<?=$cpf?>">
        <tfoot>
            <tr>
                <td colspan="5" align="right"><button type="submit" value="Atualizar Carrinho" class="btn btn-info">Atualizar Carrinho</button></td>
            </tr>
            <tr>
                <td colspan="5" align="right"><a href="cadastro_venda_produto.php?nome=<?=$nome?>&cpf=<?=$cpf?>">Continuar Comprando</a></td>
            </tr>
             <tr>
                
                    <td colspan="5" align="left"><a href="finalizar_compra.php?nome=<?=$nome?>&cpf=<?=$cpf?>"><button class="btn btn-success" name="enviar">Finalizar Compra</button></a></td>
                
            </tr>
        </tfoot>

        <tbody>
            <?php
            if ($_SESSION['carrinho'] == 0) {
                ?>
                <tr><td colspan="5">Não existe produto adicionado</td></tr>
                <?php
            } else {
                foreach ($_SESSION['carrinho'] as $id => $qtd) {
                    $sql = "SELECT * FROM produto WHERE cd_produto = '$id'";
                    $qr = mysqli_query($conexao, $sql);
                    $lista = mysqli_fetch_assoc($qr);

                    $produto = $lista['nm_produto'];
                    $preco = $lista['vl_produto'];
                    $subtotal = $lista['vl_produto'] * $qtd;
                    
                    $soma += $qtd;
                    $total += $subtotal;
                    
                                       
                    echo '<tr>
                            <td><p align="center">'.$produto.'</p></td>
                            <td><p align="center">R$ '.$preco.'</p></td>
                            <td><p align="center"><input type="number" min="0" name="prod['.$id.']" value="'.$qtd.'" /></p></td>
                            <td><p align="center">R$ '.$subtotal.'</p></td>
                            <td><p align="center"><a href="?acao=del&id='.$id.'">Remover</a></p></td>
                          </tr>';
                }
                    
                $total = number_format($total, 2, ',', '.');
                    echo '<tr><td>Qtd de Itens</td><td>'.$soma.' itens</td><td colspan="2">Total </td><td>R$ '.$total.'</td></tr>';
                }
             
                ?>
                
        </tbody>
    </form>
        
</table>
</center>
<?php
include '../Includes/rodape.php';


