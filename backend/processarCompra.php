<?php

session_start();

if($_SERVER["REQUEST_METHOD"] != "POST")
{
    header("Location: ../Pages/Pagamento.php");
    exit;
}

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

header("Location: ../Pages/PagAgradecimento.php");
exit;