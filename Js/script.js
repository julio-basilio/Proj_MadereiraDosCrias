const sleep = (ms) => new Promise((r) => setTimeout(r, ms));

const tituloOriginal = document.title;

document.addEventListener("visibilitychange", async () => {
  if (document.hidden) {
    while (document.hidden) {
      await sleep(500);
      document.title = "Ei manin...";
      await sleep(1000);
      document.title = "Volte pra cá";
      await sleep(1000);
    }
    document.title = tituloOriginal;
  }
});


let historicoTeclas = ''; // Faltava declarar esta variável no início

document.addEventListener('keydown', (tecla) => { // O caractere '{' deve vir ANTES do ')'
    historicoTeclas += tecla.key.toLowerCase();
    
    if (historicoTeclas.length > 7) {
        historicoTeclas = historicoTeclas.slice(-7);
    }
    
    if (historicoTeclas === 'monster') {
        alert('Você não quer isso...');
        window.location.href = "super.php";
        historicoTeclas = '';
    }
}); // O caractere '}' fecha a função aqui dentro do parêntese
