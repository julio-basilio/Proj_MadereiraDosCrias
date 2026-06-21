<?php
session_start();

$json = file_get_contents("../db/banco.json");
$dados = json_decode($json, true);
$produtos = $dados["produtos"];

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pagamento</title>
<link rel="icon" type="image/x-icon" href="../Img/Logo Triple T.png">

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
}

.container{
    max-width:1000px;
    margin:auto;
    padding:30px;
}

.produto{
    background:white;
    padding:15px;
    margin-bottom:15px;
    border-radius:10px;
}

.formulario{
    background:white;
    padding:25px;
    border-radius:10px;
    margin-top:30px;
}

input, select{
    width:100%;
    padding:12px;
    margin-top:5px;
    margin-bottom:15px;
}

button{
    background:#28a745;
    color:white;
    border:none;
    padding:15px 30px;
    cursor:pointer;
}

.frete-box{
    background:#f1fff1;
    border:1px solid #28a745;
    border-radius:8px;
    padding:15px;
    margin-bottom:20px;
}

input[readonly]{
    background:#f0f0f0;
}

</style>
</head>

<body>

<div class="container">

    <h1>Pagamento</h1>

    <h2>Produtos</h2>

    <?php

    foreach($produtos as $produto)
    {
        if(in_array($produto["id"], $_SESSION["carrinho"]))
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


<script>

document.getElementById("cep").addEventListener("blur", async function(){

    let cep = this.value.replace(/\D/g,'');

    if(cep.length != 8)
    {
        alert("CEP inválido");
        return;
    }

    try{

        let resposta = await fetch(
            `https://viacep.com.br/ws/${cep}/json/`
        );

        let dados = await resposta.json();

        if(dados.erro)
        {
            alert("CEP não encontrado");
            return;
        }

        document.getElementById("rua").value = dados.logradouro;
        document.getElementById("bairro").value = dados.bairro;
        document.getElementById("cidade").value = dados.localidade;
        document.getElementById("estado").value = dados.uf;

    }
    catch(erro)
    {
        alert("Erro ao buscar CEP");
    }

});

</script>

</body>
</html>