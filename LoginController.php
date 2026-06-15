<?php

header('Content-Type: application/json');

$dadosRecebidos = json_decode(file_get_contents('php://input'), true);

$id_usuario = $dadosRecebidos['id_usuario'] ?? null;
$nome       = $dadosRecebidos['nome'] ?? 'Anônimo';
$email      = $dadosRecebidos['email'] ?? '';
$senha      = $dadosRecebidos['senha'] ?? '';
$idade      = $dadosRecebidos['idade'] ?? null;
$endereco   = $dadosRecebidos['endereco'] ?? '';
$urlImage   = $dadosRecebidos['urlImagem'] ?? '';



$bancoDados = '../db/banco.json';



$conteudoBanco = file_get_contents($bancoDados);
$textoBanco = json_decode($conteudoBanco, true);

$novoUsuario = [
    "id"       => count($textoBanco['usuarios']) + 1, 
    "nome"     => $nome,
    "email"    => $email,    
    "senha"    => $senha,    
    "idade"    => $idade,   
    "endereco" => $endereco,
    "UrlImage" => $urlImage 
];


$textoBanco['usuarios'][] = $novoUsuario;

$novoJsonTexto = json_encode($textoBanco, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); 
file_put_contents($bancoDados, $novoJsonTexto);

echo json_encode([
    "Image" => $urlImage,
    "nomeUsuarioLocal" => $nome,
    "status" => "sucesso",
    "url" => "index.html"
]);