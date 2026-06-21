<?php

session_start();

$_SESSION["pedido"] = [

    "nome" => $_POST["nome"],
    "email" => $_POST["email"],
    "telefone" => $_POST["telefone"],

    "cep" => $_POST["cep"],
    "rua" => $_POST["rua"],
    "numero" => $_POST["numero"],
    "complemento" => $_POST["complemento"],
    "bairro" => $_POST["bairro"],
    "cidade" => $_POST["cidade"],
    "estado" => $_POST["estado"],

    "pagamento" => $_POST["pagamento"]

];

if(isset($_POST["idProduto"]))
{
    $_SESSION["pedido"]["produtos"] = [
        (int) $_POST["idProduto"]
    ];
}
else
{
    $_SESSION["pedido"]["produtos"] = $_SESSION["carrinho"];
}

header("Location: ../Pages/PagAgradecimento.php");
exit;
exit;