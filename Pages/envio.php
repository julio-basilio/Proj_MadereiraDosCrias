<?php

$nome = $_POST['nome'];
$email = $_POST['emailUsuario'];
$mensagem = $_POST['mensagem'];


echo "Nome: " . $nome . "<br>";
echo "E-mail: " . $email . "<br>";
echo "Mensagem: " . $mensagem . "<br>";

$bancoDados = '../db/banco.json';


$conteudoBanco = file_get_contents($bancoDados);
$textoBanco = json_decode($conteudoBanco, true);


$novaMensagem = [
    "nameUsuario" => $nome,
    "email" => $email,
    "mensagem" => $mensagem,
];


$textoBanco['mensagens'][] = $novaMensagem;


$novoJsonTexto = json_encode($textoBanco, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents($bancoDados, $novoJsonTexto);

echo "Dados salvos com sucesso!";
?>
