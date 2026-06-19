<?php

session_start();

$id = $_POST["id"];

if(isset($_SESSION["carrinho"]))
{
    $indice = array_search(
        $id,
        $_SESSION["carrinho"]
    );

    if($indice !== false)
    {
        unset($_SESSION["carrinho"][$indice]);

        $_SESSION["carrinho"] =
        array_values($_SESSION["carrinho"]);
    }
}

header("Location: carrinho.php");

exit;