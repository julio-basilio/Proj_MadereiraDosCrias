<?php
session_start();

$json = file_get_contents("../db/banco.json");
$dados = json_decode($json, true);
$produtos = $dados["produtos"];

$total = 0;

$compraDireta = false;

if(isset($_GET["id"]))
{
    $compraDireta = true;
    $idCompra = (int) $_GET["id"];
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pagamento</title>
<link rel="stylesheet" href="../Css/pagamento.css">
</head>

<body>

<div class="container">

    <h1>Pagamento</h1>

    <h2>Produtos</h2>

    <?php

   foreach($produtos as $produto)
    {
        if(
            ($compraDireta && $produto["id"] == $idCompra)
            ||
            (!$compraDireta
            && isset($_SESSION["carrinho"])
            && in_array($produto["id"], $_SESSION["carrinho"]))
        )
        {
        $total += $produto["preco"];

    ?>

    <div class="produto">

        <h3><?=$produto["nome"]?></h3>

        <p>R$ <?=$produto["preco"]?></p>

    </div>

    <?php
        }
    }
    ?>

    <h2>Total: R$ <?=number_format($total,2,",",".")?></h2>

    <form action="../backend/processarCompra.php" method="POST" class="formulario">

        <?php if($compraDireta): ?>

        <input type="hidden" name="idProduto" value="<?=$idCompra?>">

        <?php endif; ?>

        <h2>Dados do Cliente</h2>

        <label>Nome</label>
        <input type="text" name="nome" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Telefone</label>
        <input type="text" name="telefone" required>

        <h2>Endereço de Entrega</h2>

        <label>CEP</label>
        <input type="text" id="cep" name="cep" required>

        <label>Rua</label>
        <input type="text" id="rua" name="rua" readonly required>

        <label>Número</label>
        <input type="text" name="numero" required>

        <label>Complemento</label>
        <input type="text" name="complemento">

        <label>Bairro</label>
        <input type="text" id="bairro" name="bairro" readonly required>

        <label>Cidade</label>
        <input type="text" id="cidade" name="cidade" readonly required>

        <label>Estado</label>
        <input type="text" id="estado" name="estado" readonly required>

        <div class="frete-box">

            <h3>Entrega</h3>

            <p>✓ CEP localizado</p>

            <p><strong>Frete Grátis para todo o Brasil</strong></p>

        </div>

        <label>Forma de Pagamento</label>

        <select name="pagamento">

            <option>PIX</option>
            <option>Cartão de Crédito</option>
            <option>Boleto</option>

        </select>

        <button type="submit">
            Confirmar Compra
        </button>

    </form>

</div>


<script src="../Js/pagamento.js" ></script>

</body>
</html>