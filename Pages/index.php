<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madereira Dos Crias</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>

    <main class="container">
        <img src="Img/images.jpeg" alt="Logotipo Madereira Dos Crias" class="logo"> 
        
        <form action="" onsubmit="event.preventDefault();" class="card-form"> 
            <h1>Você é um super?</h1> 
            <div class="botoes-container">
                <input type="button" id="botaoNao" onClick="Nao()" value="Não">
                <input type="button" id="botaoSim" onClick="Sim()" value="Sim"> 
            </div>
        </form>     
        
        <div id="Resposta" aria-live="polite"></div> 
    </main>
    
    <script src="Js/script.js"></script> 
</body>
</html>