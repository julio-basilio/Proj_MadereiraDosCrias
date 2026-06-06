<?php

header('Content-Type: application/json');

$dadosRecebidos = json_decode(file_get_contents('php://input'), true);

$nome     = $dadosRecebidos['nome'] ?? 'Anônimo';
$endereco = $dadosRecebidos['endereco'] ?? 'Não informado';
$madeira  = $dadosRecebidos['tipMadeira'] ?? 'Não escolhida';
$qtd      = $dadosRecebidos['quantMadeira'] ?? 0;

$bancoDados = 'Servidor/banco.json';

$conteudoBanco = file_get_contents($bancoDados);
$textoBanco = json_decode($conteudoBanco, true);

$novoUsuario = [
    "id" => count($textoBanco['usuarios']) + 1, 
    "nome" => $nome,
    "endereco" => $endereco
];

$novoPedido = [
    "id_pedido" => count($textoBanco['pedidos']) + 1,
    "id_usuario" => $novoUsuario['id'], // Conecta o pedido ao usuário que acabou de ser criado
    "madeira" => $madeira,
    "quantidade" => $qtd,
    "data" => date('Y-m-d H:i:s')
];

$textoBanco['usuarios'][] = $novoUsuario;
$textoBanco['pedidos'][] = $novoPedido;

$novoJsonTexto = json_encode($bancoArray, JSON_PRETTY_PRINT);
file_put_contents($bancoDados, $novoJsonTexto);

echo json_encode(["status" => "sucesso"]);
