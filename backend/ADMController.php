<?php

header('Content-Type: application/json');

$dadosRecebidos = json_decode(file_get_contents('php://input'), true);

$nomeUsuario = $dadosRecebidos['nome'] ?? 'Anônimo';
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
            break;
        }
    }
}

if ($usuarioEncontrado === null) {
    echo json_encode(["status" => "erro", "mensagem" => "Usuário não encontrado"]);
    exit;
}

if ($senhaUsuario === $usuarioEncontrado['senha']) {
    $link = "pagADM.php";
    echo json_encode([
        "status" => "sucesso", 
        "nome" => $nomeUsuario, 
        "link" => $link
    ]);
} else {
    echo json_encode(["status" => "erro", "mensagem" => "Senha incorreta"]);
}
