<?php

session_start();

$idProduto = $_POST['id'];

if(!isset($_SESSION['carrinho']))
{
    $_SESSION['carrinho'] = [];
}

$_SESSION['carrinho'][] = $idProduto;

$_SESSION['mensagem'] = "Produto adicionado ao carrinho!";

header("Location: " . $_SERVER['HTTP_REFERER']);

exit;