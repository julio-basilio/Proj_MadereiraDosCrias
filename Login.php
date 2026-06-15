<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login | Madeireiras Sharur</title>
    <link rel="stylesheet" href="Css/login.css">
</head>
<body>

    <header>
        MADEIREIRAS SHARUR
    </header>

    <main>
        <h1>Olá! Vejo que você ainda não está logado</h1>
        <h3>Faça seu login para poder ter acesso aos outros recursos do site!</h3>

        <form id="login">
            <input type="hidden" id="id_usuario" name="id_usuario" value="1">
            
            <div class="input-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Coloque Seu Nome!"  required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Coloque o seu Email!"  required>
            </div>

            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Insira Sua Senha!"  required>
            </div>

            <div class="input-group">
                <label for="idade">Idade</label>
                <input type="number" min=0 id="idade" name="idade" placeholder="Sua idade"  required>
            </div>

            <div class="input-group">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" placeholder="Seu endereço"  required>
            </div>

            <div class="input-group">
                <label for="imageUser">URL da sua foto de perfil</label>
                <input type="url" id="imageUser" name="imageUser" placeholder="Cole o link da sua foto (ex: https://...)" required>
            </div>


            <button type="submit">Entrar no Sistema</button>
        </form>
    </main>

    <footer>
        &copy; 2026 Madeireiras Sharur. Todos os direitos reservados.
    </footer>
    
    <script src="Js/script.js"></script>

</body>
</html> 