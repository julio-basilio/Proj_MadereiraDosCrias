function Sim() {
    const DIV = document.getElementById("Resposta");
    DIV.innerHTML = "<h1>Infelizmente, a festa acabou para você</h1>";
}

function Nao() {
    const DIV = document.getElementById("Resposta");
    DIV.innerHTML = "<h1>Tudo certo, pode continuar</h1>";

    setTimeout(() => {
        window.location.href = "cap.php";
    }, 3000);

    
}
