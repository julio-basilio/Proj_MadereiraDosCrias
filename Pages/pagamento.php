<?php
session_start();

$json = file_get_contents("../db/banco.json");
$dados = json_decode($json, true);
$produtos = $dados["produtos"];

$total = 0;

$compraDireta = false;

if(isset($_GET["id"]))
{
    $compraDireta = true;
    $idCompra = (int) $_GET["id"];
}
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
    
    <link rel="icon" type="image/x-icon" href="../Img/Logo Triple T.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/pagamento.css">
    <link rel="stylesheet" href="../Css/dropdown.css">
</head>
<body>

    <div class="pagina">
    
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
           

                <div class="logo">

                    <a href="index.php">
                        <img src="../Img/logosahurmadeireira.png" height="120vh" width="120vh" alt="Logo">
                    </a>
                    <h1 class="logo-text">
                        MADEIREIRA <br> <span class="logo-span">SAHUR</span>
                    </h1>
                </div>

              
        </header>

        <main>
                    
            <div class="container-pagamento">

                <h1 class="title-pagamento">Pagamento</h1>

                <h2>Produtos</h2>

                <?php

            foreach($produtos as $produto)
                {
                    if(
                        ($compraDireta && $produto["id"] == $idCompra)
                        ||
                        (!$compraDireta
                        && isset($_SESSION["carrinho"])
                        && in_array($produto["id"], $_SESSION["carrinho"]))
                    )
                    {
                    $total += $produto["preco"];

                ?>

                <div class="produto">

                    <h3><?=$produto["nome"]?></h3>

                    <p>R$ <?=$produto["preco"]?></p>

                </div>

                <?php
                    }
                }
                ?>

                <h2>Total: R$ <?=number_format($total,2,",",".")?></h2>

                <form action="../backend/processarCompra.php" method="POST" class="formulario">

                    <?php if($compraDireta): ?>

                    <input type="hidden" name="idProduto" value="<?=$idCompra?>">

                    <?php endif; ?>

                    <h2>Dados do Cliente</h2>

                    <label>Nome</label>
                    <input type="text" name="nome" required>

                    <label>Email</label>
                    <input type="email" name="email" required>

                    <label>Telefone</label>
                    <input type="text" name="telefone" required>

                    <h2>Endereço de Entrega</h2>

                    <label>CEP</label>
                    <input type="text" id="cep" name="cep" required>

                    <label>Rua</label>
                    <input type="text" id="rua" name="rua" readonly required>

                    <label>Número</label>
                    <input type="text" name="numero" required>

                    <label>Complemento</label>
                    <input type="text" name="complemento">

                    <label>Bairro</label>
                    <input type="text" id="bairro" name="bairro" readonly required>

                    <label>Cidade</label>
                    <input type="text" id="cidade" name="cidade" readonly required>

                    <label>Estado</label>
                    <input type="text" id="estado" name="estado" readonly required>

                    <div class="frete-box">

                        <h3>Entrega</h3>

                        <p>✓ CEP localizado</p>

                        <p><strong>Frete Grátis para todo o Brasil</strong></p>

                    </div>

                    <label>Forma de Pagamento</label>

                    <select name="pagamento">

                        <option>PIX</option>
                        <option>Cartão de Crédito</option>
                        <option>Boleto</option>

                    </select>

                    <button type="submit">
                        Confirmar Compra
                    </button>

                </form>

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
    <script src="../Js/pagamento.js" ></script>
</body>
</html>