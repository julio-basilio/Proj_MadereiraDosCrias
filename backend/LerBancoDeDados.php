<?php
// Avisa o navegador/cliente que o que vai sair daqui é JSON e não textão HTML
header('Content-Type: application/json');

// Catuta o que mandaram no corpo da requisição e transforma o JSON em array do PHP
$dadosRecebidos = json_decode(file_get_contents('php://input'), true);

// Pega o nome do cidadão. Se não mandaram nada, vira o famoso 'Anônimo'
$nomeUsuario = $dadosRecebidos['nome'] ?? 'Anônimo';

// Onde fica o nosso "banco de dados de pobre" (um belo arquivo JSON)
$bancoDados = '../db/banco.json';

// Puxa o textão bruto de dentro desse arquivo
$conteudoBanco = file_get_contents($bancoDados);

// Transforma o texto do arquivo em um array de verdade para o PHP entender
$bancoArray = json_decode($conteudoBanco, true);

// Cria o detetive que vai procurar o usuário (começa com nada)
$usuarioEncontrado = null;

// Tem uma lista de usuários lá dentro ou o arquivo tá banguela?
if (isset($bancoArray['usuarios'])) {
    // Começa o jogo do "onde está o Wally" na lista de usuários
    foreach ($bancoArray['usuarios'] as $usuarioAtual) {
        // O usuário tem nowwwme? E esse nome é exatamente quem a gente quer?
        if (isset($usuarioAtual['nome']) && $usuarioAtual['nome'] === $nomeUsuario) {
            // Achei o sumido! Guarda os dados dele aqui
            $usuarioEncontrado = $usuarioAtual;
            // Encontrou, não precisa mais continuar gastando processamento à toa. Fui!
            break;
        }
    }
}

// Hora da verdade: o detetive achou alguém ou voltou de mãos vazias?
if ($usuarioEncontrado !== null) {
    // Tudo certo! Cospe os dados do vivente na tela em formato JSON
    echo json_encode([
        "status" => "sucesso",
        "dados" => $usuarioEncontrado
    ]);
} else {
    // Deu ruim, o sujeito sumiu do mapa ou digitou o nome errado
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Usuário não encontrado no Banco de Dados"
    ]);
}
