<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/contato.css">
</head>
<body>
    <div class="container">
    <header></header>
    
    <nav></nav>

    <main>
    <form action="envio.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="nome">E-mail: </label>
         <input type="email" id="email" name="email" required><br><br> 

        <label for="nome">Mensagem: </label><br>
         <textarea id="mensagem" name="mensagem" rows="5" cols="30" required></textarea><br><br>

         <button type="submit">Enviar</button>
    </form>
</main>
<footer></footer>
    </div>
</body>
</html>