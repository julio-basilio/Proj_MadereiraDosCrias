<?php

header('Content-Type: application/json');

$dadosRecebidos = json_decode(file_get_contents('php://input'), true);

$nomeUsuario = mb_strtolower($dadosRecebidos['nome'] ?? 'Anônimo', 'UTF-8');
$senhaUsuario = $dadosRecebidos['senha'] ?? '';

$bancoDados = '../db/banco.json';
$conteudoBanco = file_get_contents($bancoDados);
$bancoArray = json_decode($conteudoBanco, true);

$usuarioEncontrado = null;

$link = null;

if (isset($bancoArray['usuarios'])) {
    foreach ($bancoArray['usuarios'] as $usuarioAtual) {
        if (isset($usuarioAtual['nome']) && $usuarioAtual['nome'] === $nomeUsuario) {
            $usuarioEncontrado = $usuarioAtual;
            $image = $usuarioAtual['UrlImage'];
            break;
        }
    }
}

if ($usuarioEncontrado === null) {
    echo json_encode(["status" => "erro", "mensagem" => "Usuário não encontrado"]);
    exit;
}

if ($senhaUsuario === $usuarioEncontrado['senha']) {
    $link = "./Pages/index.php";
   echo json_encode([
    "status" => "sucesso", 
    "nome" => $nomeUsuario,
    "urlImagem" => $image,
    "link" => $link
]);
} else {
    echo json_encode(["status" => "erro", "mensagem" => "Senha incorreta"]);
}
