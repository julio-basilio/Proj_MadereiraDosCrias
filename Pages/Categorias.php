<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madeireira Nobre Prime - Excelência em Madeiras Nobres</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
 <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/categorias.css">
</head>
<body>

    <div class="container">
    
        <!-- HEADER & NAVBAR -->
        <header id="header">

            <h2>FRETE GRATIS PARA TODO BRASIL!</h2>

            <nav>

                <div class="logo">
                    <a href="index.php">
                    <img src="../Img/logosahurmadeireira.png" height="120vh" width="120vh" alt="">
                    </a>
                    <h1 class="logo-text">
                        MADEIREIRA <br> <span class="logo-span">SAHUR</span>
                    </h1>
                </div>
                
                <div class="search-box">
                    <input type="text" placeholder=" O que você procura?">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>

               
                <div class="nav-icons">

                    <a href="categorias.html">
                    <button class="icon-btn" id="cartBtn" title="Carrinho" style="position: relative;" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    </svg>
                    <span>Categorias</span>
                    </button>
                    </a>

                    <a href="#">
                    <button class="icon-btn" id="cartBtn" title="Carrinho" style="position: relative;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                        </svg>
                        <span>Entrega</span>
                    </button>
                    </a>

                    <a href="#">
                     <button class="icon-btn" id="cartBtn" title="Carrinho" style="position: relative;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                        <span>Carrinho</span>
                        <span class="cart-badge">0</span>
                    </button>
                    </a>
                    
                </div>
                 <div onclick="sair()" id="usuario-container">
                        <div id="fotoPerfil"></div>
                        <div id="nomeUsuario"></div>
                    </div>
            </nav>

            <ul class="nav-categorias">
                <li><a href="">Madeiras Brutas</a></li>
                <li><a href="">Madeiras Finas</a></li>
                <li><a href="">MDF</a></li>
                <li><a href="">Portas e Janelas</a></li>
                <li><a href="">Ferragens</a></li>
                <li><a href="">Ferramentas</a></li>
            </ul>

        </header>

        <main>

            <section class="categorias">

                <br><br>
                <div class="grid-categorias">

                    <a href="madeiras_brutas.php" class="card brutas">
                        <h2>Madeiras Brutas</h2>
                        <p>Tábuas, vigas, caibros e peças estruturais.</p>
                    </a>

                    <a href="madeiras-finas.php" class="card finas">
                        <h2>Madeiras Finas</h2>
                        <p>Materiais nobres para acabamento e móveis.</p>
                    </a>

                    <a href="mdf.php" class="card mdf">
                        <h2>MDF</h2>
                        <p>Chapas MDF para móveis e marcenaria.</p>
                    </a>

                    <a href="portas-janelas.php" class="card portas">
                        <h2>Portas e Janelas</h2>
                        <p>Modelos para residências e empresas.</p>
                    </a>

                    <a href="ferragens.php" class="card ferragens">
                        <h2>Ferragens</h2>
                        <p>Dobradiças, parafusos e acessórios.</p>
                    </a>

                    <a href="ferramentas.php" class="card ferramentas">
                        <h2>Ferramentas</h2>
                        <p>Equipamentos para construção e marcenaria.</p>
                    </a>

                </div>

            </section>
             
        </main>

        <footer class="footer">

            <section class="footer-top">

                <img src="Img/sahurFooter.png" alt="">
                
                <div class="social-area">

                    <h3>Acompanhe a Madeireira Sahur</h3>

                    <div class="social-links">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

            </section>

            <section class="footer-content">

                <div class="footer-column">
                    <h4>Navegação</h4>

                    <a href="#">Início</a>
                    <a href="#">Produtos</a>
                    <a href="#">Categorias</a>
                    <a href="#">Contato</a>
                </div>

                <div class="footer-column">
                    <h4>Categorias</h4>

                    <a href="#">Madeiras Brutas</a>
                    <a href="#">Madeiras Finas</a>
                    <a href="#">MDF</a>
                    <a href="#">Compensados</a>
                </div>

                <div class="footer-column">
                    <h4>Projeto Acadêmico</h4>
                    <p>
                        Este site é fictício e foi desenvolvido
                        apenas para fins de estudo e portfólio.
                    </p>

                    <a href="https://github.com/seuusuario/seurepositorio" target="_blank" class="repo-link">Ver Repositório no GitHub</a>
                </div>

            </section>

            <section class="footer-bottom">

                <p>© 2026 Madeireira Sahur • Loja fictíca</p>
                <p>Desenvolvido por David, Julio, Lucas, Pedro</p>

            </section>

        </footer>

    </div>
    
 <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="Js/index.js"></script>
</body>
</html>




