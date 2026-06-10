<?php

header('Content-Type: application/json');


$arquivo = '../db/banco.json'; 

if (!file_exists($arquivo)) {
    echo json_encode(['erro' => 'Arquivo de banco de dados não encontrado.']);
    exit;
}

$json_db = file_get_contents($arquivo);

// 
$dadosDB = json_decode($json_db, true);

// USUÁRIOS 
$lista_usuarios_completa = isset($dadosDB['usuarios']) ? $dadosDB['usuarios'] : [];
$total_usuarios = count($lista_usuarios_completa);

$nomes_usuarios = array_map(function($usuario) {
    return [
        'nome'   => $usuario['nome'],
        'email'   => $usuario['email'],
        'senha' => $usuario['senha'],
        'idade' => $usuario['idade'],
        'endereco' => $usuario['endereco']
        
        ];
}, $lista_usuarios_completa);


// PRODUTOS (MADEIRAS)
$lista_produtos_completa = isset($dadosDB['madeiras']) ? $dadosDB['madeiras'] : [];
$total_produtos = count($lista_produtos_completa);

$nomes_produtos = array_map(function($produto) {
    return [
        'Nome'        => $produto['Nome'],
        'Tipo'        => $produto['Tipo'],
        'Preco_Metro' => $produto['Preco_Metro'],
        'Quantidade'  => $produto['Quantidade']
    ];
}, $lista_produtos_completa);


// MENSAGENS 
$lista_mensagens_completa = isset($dadosDB['mensagens']) ? $dadosDB['mensagens'] : [];
$total_mensagens = count($lista_mensagens_completa);

$nomes_mensagens = array_map(function($item) {
    return [
        'nameUsuario' => $item['nameUsuario'],
        'email'       => $item['email'],
        'mensagem'    => $item['mensagem']
    ];
}, $lista_mensagens_completa); 


// RESPOSTA FINAL

$resposta = [
    'usuarios' => [
        'quantidade' => $total_usuarios,
        'lista'      => $nomes_usuarios
    ],
    'produtos' => [
        'quantidade' => $total_produtos,
        'lista'      => $nomes_produtos
    ],
    'mensagens' => [
        'quantidade' => $total_mensagens,
        'lista'      => $nomes_mensagens
    ]
];

echo json_encode($resposta);