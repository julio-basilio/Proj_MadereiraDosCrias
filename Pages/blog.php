<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madeireira Nobre Prime - Excelência em Madeiras Nobres</title>
    <link rel="stylesheet" href="../Css/molde.css">
    <link rel="stylesheet" href="../Css/blog.css">
    <link rel="stylesheet" href="../Css/dropdown.css">
    
    <link rel="icon" type="image/x-icon" href="../Img/Logo Triple T.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

    <div class="container">
    
        <header id="header">

            <h2>FRETE GRATIS PARA TODO BRASIL!</h2>

            <nav>
                <div class="logo">
                    <img src="../Img/logosahurmadeireira.png" height="120" width="120" alt="">
                    <h1 class="logo-text">
                        MADEIREIRA <br> <span class="logo-span">SAHUR</span>
                    </h1>
                </div>
                
                <div class="search-box">
                    <input type="text" placeholder=" O que você procura?">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                
                <div class="nav-icons">

                    <button class="icon-btn" id="btnCategorias" title="Categorias" style="position: relative;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                        </svg>
                        <span>Categorias</span>
                    </button>

                    <button class="icon-btn" id="btnEntrega" title="Entrega" style="position: relative;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                        </svg>
                        <span>Entrega</span>
                    </button>

                    <div onclick="sair()" id="usuario-container">
                        <div id="fotoPerfil"></div>
                        <div id="nomeUsuario"></div>
                    </div>

                    <button class="icon-btn" id="btnCarrinho" title="Carrinho" style="position: relative;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                        <span>Carrinho</span>
                        <span class="cart-badge">0</span>
                    </button>
                </div>

            </nav>

            <ul class="nav-categorias">
                <li><a href="madeiras_brutas.php">Madeiras Brutas</a></li>
                <li><a href="madeiras-finas.php">Madeiras Finas</a></li>
                <li><a href="mdf.php">MDF</a></li>
                <li><a href="portas-janelas.php">Portas e Janelas</a></li>
                <li><a href="ferragens.php">Ferragens</a></li>
                <li><a href="ferramentas.php">Ferramentas</a></li>

            <li class="opcao">
                    <a href="">Páginas</a>

                    <ul class="dropdown">
                        <div class="dropAlinhamento">
                        <li><a href="../Login.php">Faça login</a></li>
                        <li><a href="../Cadastro.php">Faça seu cadastro</a></li>
                        <li><a href="index.php">Página inicial</a></li>
                        <li><a href="Categorias.php">Nossos produtos</a></li>
                        <li><a href="madeiras_brutas.php">Madeiras Brutas</a></li>
                        <li><a href="madeiras-finas.php">Madeiras Finas</a></li>
                        <li><a href="mdf.php">MDF</a></li>
                        <li><a href="ferramentas.php">Ferramentas</a></li>
                        <li><a href="ferragens.php">Ferragens</a></li>
                        <li><a href="portas-janelas.php">Portas e Janelas</a></li>
                        <li><a href="carrinho.php">verifique seu carrinho</a></li>
                        <li><a href="calculofrete.php">Consulte o frete da sua região</a></li>
                        <li><a href="sobrenos.php">Sobre Nós</a></li>
                        <li><a href="contato.php">Entre em contato</a></li>
                        <li><a href="blog.php">Nosso Blog</a></li>
                        </div>
                    </ul>

                </li>

            </ul>

        </header>

        <main>
    <div class="fonteTexto">
            <h1>Blog da Madereira Sahur</h1>
            <h2>Tudo o que você precisa saber para escolher a madeira certa</h2><br><br>        

            <h3>A madeira é um dos materiais mais utilizados na construção civil e na fabricação de móveis. 
                Sua versatilidade, resistência e beleza fazem dela uma excelente opção para diversos projetos. 
                No entanto, escolher o tipo correto de madeira e realizar sua manutenção adequadamente é fundamental para garantir durabilidade e segurança. 
                Neste artigo, vamos abordar os principais aspectos que você deve conhecer antes de comprar madeira para sua obra. </h3><br><br><br>

            <h1>Como escolher a madeira ideal para sua obra</h1><br>

            <h3>A escolha da madeira depende diretamente da finalidade do projeto. 
                Antes de realizar a compra, é importante considerar fatores como resistência, durabilidade, custo e exposição às condições climáticas. 
                Para estruturas que suportam peso, como telhados e vigas, recomenda-se o uso de madeiras mais resistentes. 
                Já para acabamentos e móveis, podem ser utilizadas opções mais leves e fáceis de trabalhar. 
                Outro fator importante é o ambiente onde a madeira será utilizada. Em áreas externas, é necessário escolher espécies com maior resistência à umidade e às variações climáticas. 
                Já em ambientes internos, a estética e o acabamento costumam ser os critérios mais relevantes. Além disso, é importante verificar a procedência do material, garantindo que a madeira seja proveniente de fontes legais e sustentáveis.</h3><br><br> 

            <h1>Principais critérios de escolha:</h1>
            <h3>
            <ul>
                <li>Resistência mecânica;</li>
                <li>Durabilidade;</li>
                <li>Facilidade de manutenção;</li>
                <li>Custo-benefício;</li>
                <li>Aparência e acabamento;</li>
                <li>Local de utilização.</li>
            </ul>
            </h3><br><br>

            <h1>Principais tipos de madeira utilizados na construção civil</h1><br>

          <h2>Existem diversas espécies de madeira utilizadas no setor da construção. Cada uma possui características específicas que influenciam sua aplicação.</h2><br><br>
           
            <h1>Pinus</h1>

            <h3>O Pinus é uma madeira de reflorestamento bastante utilizada devido ao seu baixo custo e facilidade de manuseio. É comum em móveis, forros e estruturas leves.</h3><br><br>

            <h1>Eucalipto</h1>

            <h3>O Eucalipto apresenta boa resistência e é amplamente utilizado em construções, cercas, telhados e estruturas rurais. Também é uma madeira proveniente de reflorestamento.</h3><br><br>

            <h1>Cedro</h1>

            <h3>Conhecido pela sua beleza e boa trabalhabilidade, o Cedro é muito utilizado na fabricação de portas, janelas e móveis.</h3><br><br>

            <h1>Ipê</h1>

            <h3>Considerado uma das madeiras mais resistentes do Brasil, o Ipê é ideal para aplicações externas, decks e estruturas que exigem alta durabilidade.</h3><br><br>

            <h1>Peroba</h1>

            <h3>Muito utilizada em construções e acabamentos, a Peroba possui boa resistência e longa vida útil.</h3><br><br><br>

            <h1>Vantagens da madeira na construção</h1><br>

            <h3>
            <ul>
                <li>Material renovável;</li>
                <li>Excelente isolamento térmico;</li>
                <li>Boa resistência estrutural;</li>
                <li>Fácil manutenção;</li>
                <li>Visual elegante e natural.</li>
            </ul>
            </h3><br><br>

            <h1>Como proteger a madeira contra cupins</h1>

            <h2>Os cupins são uma das principais ameaças às estruturas de madeira. Esses insetos alimentam-se da celulose presente no material e podem causar sérios danos quando não combatidos adequadamente. A melhor forma de prevenção é utilizar madeira tratada e realizar inspeções periódicas para identificar sinais de infestação. Além disso, alguns cuidados ajudam a aumentar a proteção</h2><br><br>

            <h1>Dicas de prevenção</h1><br>

            <h3>
            <ul>
                <li>Evite o contato direto da madeira com o solo;</li>
                <li>Mantenha ambientes secos e ventilados;</li>
                <li>Aplique produtos imunizantes específicos;</li>
                <li>Utilize vernizes e seladores de qualidade;</li>
                <li>Realize inspeções periódicas em móveis e estruturas.</li>
            </ul>
            </h3><br><br>

            <h1>Sinais de infestação</h1><br>

            <h3>
            <ul>
                <li>Pequenos furos na superfície;</li>
                <li>Presença de pó semelhante à serragem</li>
                <li>Estruturas ocas ou enfraquecidas;</li>
                <li>Asas de insetos próximas às peças de madeira.</li>
            </ul>
            </h3><br><br>

            <h2>Ao identificar qualquer um desses sinais, é recomendável buscar tratamento especializado para evitar maiores prejuízos.</h2><br><br><br>

            <h1>Madeira maciça, MDF e MDP: qual escolher?</h1>

            <h2>Na hora de fabricar móveis ou realizar acabamentos internos, muitas pessoas têm dúvidas sobre qual material utilizar. As opções mais comuns são a madeira maciça, o MDF e o MDP.</h2><br><br>

            <h1>Madeira Maciça</h1>

            <h2>É produzida diretamente a partir da madeira natural.</h2><br>

            <h2>Vantagens</h2>

            <h3>
                <ul>
                    <li>Alta resistência;</li>
                    <li>Grande durabilidade;</li>
                    <li>Acabamento sofisticado;</li>
                    <li>Possibilidade de restauração.</li>
                </ul>
            </h3><br>

            <h2>Desvantagens</h2>

            <h3>
                <ul>
                    <li>Custo mais elevado;</li>
                    <li>Pode sofrer variações devido à umidade.</li>
                </ul>
            </h3><br><br>

            <h1>MDF (Medium Density Fiberboard)</h1>

            <h2>É fabricado a partir de fibras de madeira prensadas com resinas.</h2>

            <h2>Vantagens</h2><br>

            <h3>
                <ul>
                    <li>Superfície lisa;</li>
                    <li>Excelente para pintura;</li>
                    <li>Fácil usinagem;</li>
                    <li>Ótimo acabamento.</li>
                </ul>
            </h3>

            <h2>Desvantagens</h2><br>

            <h3>
                <ul>
                    <li>Menor resistência à umidade;</li>
                    <li>Menor resistência estrutural em comparação à madeira maciça.</li>
                </ul>
            </h3><br><br>

            <h1>MDP (Medium Density Particleboard)</h1>

            <h2>Produzido com partículas de madeira prensadas.</h2>

            <h2>Vantagens</h2><br>

            <h3>
                <ul>
                    <li>Menor custo;</li>
                    <li>Boa resistência para móveis retos;</li>   
                    <li>Leve e funcional.</li>
                </ul>
            </h3>

            <h2>Desvantagens</h2><br>

            <h3>
                <ul>
                    <li>Menor capacidade para detalhes decorativos;</li>
                    <li>Menor resistência à umidade.</li>
                </ul>
            </h3><br><br>

            <h1>Comparação rápida</h1><br><br>

            <h2>Madeira Maciça</h2>
            
            <h3>é a opção mais resistente e durável entre as três. Por ser produzida diretamente da madeira natural, apresenta excelente qualidade e um visual mais sofisticado. Em compensação, costuma ter um custo mais elevado e pode sofrer pequenas variações devido à umidade e às mudanças climáticas. </h3><br>

            <h2>MDF (Medium Density Fiberboard):</h2>

            <h3>é fabricado a partir de fibras de madeira prensadas. Possui superfície lisa e uniforme, sendo muito utilizado em móveis planejados e peças com acabamentos detalhados. Seu custo é intermediário, mas sua resistência à umidade é menor quando comparada à madeira maciça. </h3><br>

            <h2>MDP (Medium Density Particleboard):</h2>

            <h3>é produzido com partículas de madeira prensadas e geralmente apresenta o menor custo entre os três materiais. É bastante utilizado em móveis residenciais e corporativos, oferecendo um bom custo-benefício. Entretanto, possui limitações em acabamentos mais elaborados e também não é recomendado para ambientes com muita umidade. </h3><br><br>

            <h2>De forma geral, a durabilidade, o madeira maciça MDF é indicada para quem busca máxima resistência e é ideal para móveis com acabamento refinado e detalhes decorativos, enquanto o MDP é uma alternativa econômica para projetos que priorizam praticidade e custo-benefício.</h2><br><br><br>

            <h1>Conclusão</h1><br>

            <h3>A escolha correta da madeira é essencial para garantir qualidade, segurança e durabilidade em qualquer projeto. Conhecer os diferentes tipos de madeira, entender suas aplicações e realizar a manutenção adequada ajuda a evitar problemas futuros e aumenta a vida útil das estruturas e móveis. Seja para uma construção, reforma ou fabricação de móveis, investir em materiais de qualidade e seguir boas práticas de conservação é a melhor forma de obter excelentes resultados. </h3>
            </div>
            
        </main>

          <footer class="footer">

            <section class="footer-top">
                <img src="../Img/sahurFooter.png" alt="">
                
                <div class="social-area">
                    <h3>Acompanhe a Madeireira Sahur</h3>
                    <div class="social-links">
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F%3Flocale%3Dpt_BR" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </section>

            <section class="footer-content">
                <div class="footer-column">
                    <h4>Navegação</h4>
                    <a href="index.php">Início</a>
                    <a href="mdf.php">Produtos</a>
                    <a href="Categorias.php">Categorias</a>
                    <a href="contato.php">Contato</a>
                </div>

                <div class="footer-column">
                    <h4>Categorias</h4>
                    <a href="madeiras_brutas.php">Madeiras Brutas</a>
                    <a href="madeiras-finas.php">Madeiras Finas</a>
                    <a href="mdf.php">MDF</a>
                </div>

                <div class="footer-column">
                    <h4>Projeto Acadêmico</h4>
                    <p>
                        Este site é fictício e foi desenvolvido
                        apenas para fins de estudo e portfólio.
                    </p>
                    <a href="https://github.com/julio-basilio/Proj_MadereiraDosCrias.git" target="_blank" class="repo-link">Ver Repositório no GitHub</a>
                </div>
            </section>

            <section class="footer-bottom">
                <p>© 2026 Madeireira Sahur • Loja fictíca</p>
                <p>Desenvolvido por David, Julio, Lucas, Pedro</p>
            </section>

        </footer>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../Js/teste.js"></script>
</body>
</html>

</body>
</html>