<?php

session_start();

$json = file_get_contents("../db/banco.json");
$dados = json_decode($json, true);

$produtos = $dados["produtos"];

$pedido = $_SESSION["pedido"];

$total = 0;

foreach($produtos as $produto)
{
    if(in_array($produto["id"], $pedido["produtos"]))
    {
        $total += $produto["preco"];
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="../Img/Logo Triple T.png">
<meta charset="UTF-8">

<title>Compra Finalizada</title>

<style>
body{
    font-family: Arial;
    background:#f4f4f4;
    margin:0;
}

.container{
    max-width:1000px;
    margin:auto;
    padding:30px;
}

.card{
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.sucesso{
    color:#28a745;
}

.resumo{
    background:#f8f9fa;
    padding:20px;
    border-radius:8px;
    margin-top:20px;
}

</style>
</head>

<body>

    <div class="container">

        <div class="card">

            <h1>🎉 Compra Finalizada!</h1>

            <p>
            Obrigado pela sua compra.
            </p>

            <hr>
            <h2>Dados do Cliente</h2>

            <p><strong>Nome:</strong> <?=$pedido["nome"]?></p>

            <p><strong>Email:</strong> <?=$pedido["email"]?></p>

            <p><strong>Telefone:</strong> <?=$pedido["telefone"]?></p>

            <p><strong>Pagamento:</strong> <?=$pedido["pagamento"]?></p>

            <hr>

            <hr>

            <h2>Endereço de Entrega</h2>

            <p>
            <strong>CEP:</strong>
            <?=$pedido["cep"]?>
            </p>

            <p>
            <strong>Endereço:</strong>
            <?=$pedido["rua"]?>,
            <?=$pedido["numero"]?>
            </p>

            <?php if(!empty($pedido["complemento"])) { ?>

            <p>
            <strong>Complemento:</strong>
            <?=$pedido["complemento"]?>
            </p>

            <?php } ?>

            <p>
            <strong>Bairro:</strong>
            <?=$pedido["bairro"]?>
            </p>

            <p>
            <strong>Cidade:</strong>
            <?=$pedido["cidade"]?>
            </p>

            <p>
            <strong>Estado:</strong>
            <?=$pedido["estado"]?>
            </p>

            <p>
            <strong>Frete:</strong>
            Grátis para todo o Brasil
            </p>

            <h2>Produtos Comprados</h2>

            <?php

            foreach($produtos as $produto)
            {
                if(in_array($produto["id"], $pedido["produtos"]))
                {
            ?>

            <div>

                <h3><?=$produto["nome"]?></h3>

                <p>R$ <?=$produto["preco"]?></p>

            </div>

            <?php

                }
            }

            ?>

            <div class="resumo">

                <h2>Resumo do Pedido</h2>

                <p>
                    Subtotal:
                    R$ <?=number_format($total,2,",",".")?>
                </p>

                <p>
                    Frete:
                    R$ 0,00
                </p>

                <hr>

                <h2>
                    Total:
                    R$ <?=number_format($total,2,",",".")?>
                </h2>

            </div>

            <h2>Pedido Nº <?=rand(1000,9999)?></h2>

        </div>

    </div>



        <?php
        unset($_SESSION["carrinho"]);
        ?>
</body>
</html>