<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madeireira Nobre Prime - Excelência em Madeiras Nobres</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/index.css">
</head>
<body>

    <div class="container">
    
        <header id="header">

            <h2>FRETE GRATIS PARA TODO BRASIL!</h2>

            <nav>

                <div class="logo">

                    <a href="index.php">
                        <img src="../Img/logosahurmadeireira.png" height="120vh" width="120vh" alt="Logo">
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

                    <a href="categorias.php">
                        <button class="icon-btn" id="catBtn" title="Categorias" style="position: relative;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            </svg>
                            <span>Categorias</span>
                        </button>
                    </a>

                    <a href="#">
                        <button class="icon-btn" id="deliveryBtn" title="Entrega" style="position: relative;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                            </svg>
                            <span>Entrega</span>
                        </button>
                    </a>

                    <a href="carrinho.php">
                        <button class="icon-btn" id="cartBtn" title="Carrinho" style="position: relative;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                            <span>Carrinho</span>
                            <span class="cart-badge">0</span>
                        </button>
                    </a>

                     <div id="usuario-container">
                        <div id="fotoPerfil"></div>
                        <div id="nomeUsuario"></div>
                    </div>
                    
                </div>
            </nav>

            <ul class="nav-categorias">
                <li><a href="madeiras_brutas.php">Madeiras Brutas</a></li>
                <li><a href="madeiras-finas.php">Madeiras Finas</a></li>
                <li><a href="mdf.php">MDF</a></li>
                <li><a href="portas-janelas.php">Portas e Janelas</a></li>
                <li><a href="ferragens.php">Ferragens</a></li>
                <li><a href="ferramentas.php">Ferramentas</a></li>
            </ul>

        </header>

        <main>
            <section class="cards">
                <div class="card1">
                    <div class="text-card1">
                        <h1>
                            TUNG TUNG <br> TUNG SAHUR... <br> <span class="accent">A MADEIRA CERTA <br> PARA SUA OBRA!</span>
                        </h1>
                        <p class="subtitle">
                            Madeiras nobres, acabamento impecável e atendimento especializado para quem busca qualidade sem compromissos.
                        </p>
                        <div class="hero-buttons">
                            <a href="Categorias.php">
                                <button class="btn btn-primary">Ver Catálogo</button>
                            </a>
                            <a href="">
                                 <button class="btn btn-secondary">Solicitar Orçamento</button>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="card card2"></div>
            </section>

            <section class="qualidades">

                <div class="block">

                    <svg class="icone" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                    </svg>

                    <div class=" texto-qualidades">
                        <h1>Entrega para toda região</h1>
                        <p>Mais rápido do que voce imagina!</p>
                    </div>
                </div>

                <div class="block">

                    <svg class="icone" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                    <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"/>
                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/>
                    </svg>

                    <div class=" texto-qualidades">
                        <h1>Produtos selecionados</h1>
                        <p>Madeira de qualidade com procedência.</p>
                    </div>
                </div>

                <div class="block">

                    <svg class="icone" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                    <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                    <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                    </svg>

                    <div class=" texto-qualidades">
                        <h1>Compra segura</h1>
                        <p>compre sem preocupação.</p>
                    </div>
                </div>

                <div class="last-block">

                    <svg class="icone" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                    <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/>
                    </svg>

                    <div class=" texto-qualidades">
                        <h1>Atendimento especializado</h1>
                        <p>Estamos prontos para te ajudar sempre!</p>
                    </div>
                </div>

            </section>

            <section class="sobre">

                <div class="img-sobre">
                    <img src="../Img/pexels-nc-farm-bureau-mark-12278566.jpg"  alt="">
                </div>

                <div class="texto-sobre">
                    <h1>Sobre a Madeireira Sahur</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora natus commodi voluptates distinctio
                         omnis eos expedita. Quis porro eos perspiciatis magnam voluptatibus debitis tenetur, est quisquam deleniti quod a rerum.
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus rem eligendi voluptatum quidem liber
                        o quia iste, aliquid sunt, quaerat mollitia, exercitationem obcaecati hic? Omnis deleniti, impedit non incid
                        unt quisquam alias?</p>
                </div>

            </section>
        </main>

        <footer class="footer">
            <section class="footer-top">
                <img src="../Img/sahurFooter.png"  alt="Footer Logo">
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
                    <p>Este site é fictício e foi desenvolvido apenas para fins de estudo e portfólio.</p>
                    <a href="https://github.com/seuusuario/seurepositorio" target="_blank" class="repo-link">Ver Repositório no GitHub</a>
                </div>
            </section>

            <section class="footer-bottom">
                <p>© 2026 Madeireira Sahur • Loja fictícia</p>
                <p>Desenvolvido por David, Julio, Lucas, Pedro</p>
            </section>
        </footer>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="Js/script.js"></script>
</body>
</html>