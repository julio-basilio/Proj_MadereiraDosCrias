<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../Css/pagADM.css">
</head>
<body>

    <header class="adm-header">
        <div class="header-logo">
            <i class="fa-solid fa-gauge"></i>
            Painel ADM
        </div>
        <div class="header-right">
            <span class="header-nome">Bem-vindo, <strong id="nomeAdm">ADM</strong></span>
            <div class="header-avatar"><i class="fa-solid fa-user"></i></div>
            <a href="adm.php" class="btn-sair">
                <i class="fa-solid fa-right-from-bracket"></i> Sair
            </a>
        </div>
    </header>

    <main class="adm-main">
        <div>
            <p class="page-title">Dashboard</p>
            <p class="page-sub">Gerencie usuários, pedidos e conteúdo do site.</p>
        </div>

        <div class="cards-row">
            <div class="stat-card">
                <div class="stat-label"><i class="fa-solid fa-users"></i> Usuários</div>
                <div class="stat-val" id="totalUsuarios">—</div>
            </div>
            <div class="stat-card">
                <div class="stat-label"><i class="fa-solid fa-box"></i> Produtos</div>
                <div class="stat-val" id="totalProdutos">—</div>
            </div>
            <div class="stat-card">
                <div class="stat-label"><i class="fa-solid fa-cart-shopping"></i> Pedidos</div>
                <div class="stat-val" id="totalPedidos">—</div>
            </div>
            <div class="stat-card">
                <div class="stat-label"><i class="fa-solid fa-envelope"></i> Mensagens</div>
                <div class="stat-val" id="totalMensagens">—</div>
            </div>
        </div>

        <div class="content-card">
            <div class="content-card-header">
                <span class="content-card-title"><i class="fa-solid fa-users"></i> Usuários Cadastrados</span>
            </div>
            <table id="tabelaUsuarios">
                </table> 
        </div>

        <div class="content-card" style="margin-top: 25px;">
            <div class="content-card-header">
                <span class="content-card-title"><i class="fa-solid fa-box"></i> Estoque de Madeiras</span>
            </div>
            <table id="tabelaProdutos">
                </table> 
        </div>

        <div class="content-card" style="margin-top: 25px;">
            <div class="content-card-header">
                <span class="content-card-title"><i class="fa-solid fa-envelope"></i> Caixa de Mensagens</span>
            </div>
            <table id="tabelaMensagens">
                </table> 
        </div>
    </main>

    <script src="../Js/pagADM.js"></script>
</body>
</html>