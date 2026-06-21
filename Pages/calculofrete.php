<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madeireira Sahur</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/entrega.css">
</head>
<body>

    <div class="container">
    
        <header id="header">

            <div class="header-top">

                <a href="contato.php" class="left-link">
                    WhatsApp: (99) 9 9999-9999
                </a>

                <span class="frete">
                    FRETE GRÁTIS PARA TODO BRASIL!
                </span>

                <a href="contato.php" class="right-link">
                    Entrar em contato
                </a>

            </div>
           

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

                    <a href="calculofrete.php">
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
                            <span class="cart-badge">
                              <?php

                                if(isset($_SESSION['carrinho']))
                                {
                                    echo count($_SESSION['carrinho']);
                                }
                                else
                                {
                                    echo 0;
                                }
                                ?>
                            </span>
                        </button>
                    </a>

                      <div onclick="sair()" id="usuario-container">
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

        <h1 class="title-frete" >Entrega rápida, preço justo, só na Madeireira Sahur</h1>
              
            <div class="container-entrega"> 

                <div class="img-sahur" >
                     <img src="../Img/entrega sahur caminhao.png" alt=""> <br> <br>
                </div> 
    
                <div class="card">

                    <div class="hero">

                        <h1>Consultar Frete</h1>

                        <p>Verifique a disponibilidade de entrega para sua região.</p>

                    </div>

                    <div class="consulta">

                        <label>Digite seu CEP</label>

                        <div class="busca">

                            <input
                                type="text"
                                id="cep"
                                placeholder="00000-000"
                                maxlength="9"
                            >

                            <button id="btnBuscar">
                                Consultar
                            </button>

                        </div>

                        <span id="erro"></span>

                    </div>

                    <div id="resultado" class="resultado">

                        <h2>Endereço Encontrado</h2>

                        <div class="campo">
                            <label>Rua</label>
                            <input type="text" id="logradouro" readonly>
                        </div>

                        <div class="campo">
                            <label>Bairro</label>
                            <input type="text" id="bairro" readonly>
                        </div>

                        <div class="linha">

                            <div class="campo">
                                <label>Cidade</label>
                                <input type="text" id="cidade" readonly>
                            </div>

                            <div class="campo uf">
                                <label>UF</label>
                                <input type="text" id="uf" readonly>
                            </div>

                        </div>

                        <div class="info-box sucesso">

                            <h3>🚚 Frete</h3>

                            <p>
                                Frete Grátis para todo o Brasil.
                            </p>

                        </div>

                        <div class="info-box prazo">

                            <h3>📦 Prazo Estimado</h3>

                            <p>
                                Entre 5 e 12 dias úteis.
                            </p>

                        </div>

                    </div>

                </div>

            </div>
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
    <script src="../Js/entrega.js"></script>
</body>
</html>