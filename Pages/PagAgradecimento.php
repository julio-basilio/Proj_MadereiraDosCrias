<?php

session_start();

$json = file_get_contents("../db/banco.json");
$dados = json_decode($json, true);

$produtos = $dados["produtos"];

$pedido = $_SESSION["pedido"];

$total = 0;

foreach($produtos as $produto)
{
    if(in_array($produto["id"], $pedido["produtos"]))
    {
        $total += $produto["preco"];
    }
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
    <style>
        


body{
    font-family: Arial;
    background:#f4f4f4;
    margin:0;
}

.container{
    max-width:1000px;
    margin:auto;
    padding:30px;
}

.card{
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.sucesso{
    color:#28a745;
}

.resumo{
    background:#f8f9fa;
    padding:20px;
    border-radius:8px;
    margin-top:20px;
}





.agradecimento {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 20px;
    min-height: 70vh;
}

.agradecimento-box {
    background: white;
    padding: 50px;
    border-radius: 20px;
    max-width: 700px;
    width: 100%;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}

.agradecimento-box i {
    font-size: 80px;
    color: #3F6B34;
    margin-bottom: 20px;
}

.agradecimento-box h1 {
    color: #3B2618;
    margin-bottom: 15px;
    font-size: 2.5rem;
}

.agradecimento-box p {
    color: #555;
    margin-bottom: 15px;
}

.pedido-info {
    background: #eee0ce;
    padding: 20px;
    border-radius: 12px;
    margin: 25px 0;
}

.mensagem {
    font-size: 1.1rem;
}

.botoes {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 30px;
    flex-wrap: wrap;
}

.btn-continuar {
    display: inline-flex;
    align-items: center;
    gap: 10px;

    padding: 15px 30px;

    background: linear-gradient(
        135deg,
        #C8A96A,
        #dd9c3e
    );

    color: white;
    text-decoration: none;

    border-radius: 12px;

    font-size: 16px;
    font-family: 'Archivo Black', sans-serif;

    box-shadow: 0 5px 15px rgba(200, 169, 106, 0.35);

    transition: all .3s ease;
}

.btn-continuar:hover {
    color: white;
    transform: translateY(-3px);

    box-shadow: 0 10px 25px rgba(200, 169, 106, 0.5);

    background: linear-gradient(
        135deg,
        #dd9c3e,
        #C8A96A
    );
}

.btn-continuar:active {
    transform: translateY(0);
}



    </style>
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
            
            <section class="agradecimento">

                <div class="agradecimento-box">
                    <i class="fa-solid fa-circle-check"></i>

                    <h1>Compra Realizada com Sucesso!</h1>

                    <p>Obrigado por comprar na <strong>Madeireira Sahur</strong>.
                    Seu pedido foi recebido e já está sendo processado por nossa equipe.
                    </p>

                    <hr>
                    <h2>Dados do Cliente</h2>

                    <p><strong>Nome:</strong> <?=$pedido["nome"]?></p>

                    <p><strong>Email:</strong> <?=$pedido["email"]?></p>

                    <p><strong>Telefone:</strong> <?=$pedido["telefone"]?></p>

                    <p><strong>Pagamento:</strong> <?=$pedido["pagamento"]?></p>

                    <hr>

                    <hr>

                    <h2>Endereço de Entrega</h2>

                    <p>
                    <strong>CEP:</strong>
                    <?=$pedido["cep"]?>
                    </p>

                    <p>
                    <strong>Endereço:</strong>
                    <?=$pedido["rua"]?>,
                    <?=$pedido["numero"]?>
                    </p>

                    <?php if(!empty($pedido["complemento"])) { ?>

                    <p>
                    <strong>Complemento:</strong>
                    <?=$pedido["complemento"]?>
                    </p>

                    <?php } ?>

                    <p>
                    <strong>Bairro:</strong>
                    <?=$pedido["bairro"]?>
                    </p>

                    <p>
                    <strong>Cidade:</strong>
                    <?=$pedido["cidade"]?>
                    </p>

                    <p>
                    <strong>Estado:</strong>
                    <?=$pedido["estado"]?>
                    </p>

                    <p>
                    <strong>Frete:</strong>
                    Grátis para todo o Brasil
                    </p>

                    <h2>Produtos Comprados</h2>

                    <?php

                    foreach($produtos as $produto)
                    {
                        if(in_array($produto["id"], $pedido["produtos"]))
                        {
                    ?>

                    <div>

                        <h3><?=$produto["nome"]?></h3>

                        <p>R$ <?=$produto["preco"]?></p>

                    </div>

                    <?php

                        }
                    }

                    ?>

                    <div class="resumo">

                        <h2>Resumo do Pedido</h2>

                        <p>
                            Subtotal:
                            R$ <?=number_format($total,2,",",".")?>
                        </p>

                        <p>
                            Frete:
                            R$ 0,00
                        </p>

                        <hr>

                        <h2>
                            Total:
                            R$ <?=number_format($total,2,",",".")?>
                        </h2>

                    </div>

                    <h2>Pedido Nº <?=rand(1000,9999)?></h2>

                    <div class="botoes">
                    <a href="index.php" class="btn-continuar">Continuar Comprando</a>
                    </div>

                </div>

            </section>


        <?php
        unset($_SESSION["carrinho"]);
        ?>

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