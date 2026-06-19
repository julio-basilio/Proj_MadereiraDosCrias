const logado = localStorage.getItem('Logado');

logado === 'false'

console.log(logado);
if (logado === 'false' || logado === null) {
  const popup = document.getElementById('meuPopup');
  const fecharPopup = document.getElementById('fecharPopup');

  if (popup && fecharPopup) {
    

    document.addEventListener('click', function() {
      popup.showModal();
    }, { once: true });
    


    fecharPopup.addEventListener('click', function() {
      popup.close();
    });
  }
}



const nomeTela = localStorage.getItem('nomeUsuario');
const fotoperfil = localStorage.getItem('urlImagem67');

const divNome = document.getElementById('nomeUsuario');
const divPerfil = document.getElementById('fotoPerfil');

if (divNome && nomeTela) {
    divNome.innerHTML = `<span>${nomeTela.toUpperCase()}</span>`;
}

if (divPerfil && fotoperfil) {
    divPerfil.innerHTML = `<img src="${fotoperfil}" alt="Foto de Perfil" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;" />`;
}

console.log("foto perfil: " + fotoperfil);


    const sleep = (ms) => new Promise((r) => setTimeout(r, ms));
const tituloOriginal = document.title;

// Efeito de alteração do título da aba
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

// Easter Egg de Administrador
let historicoTeclas = '';
document.addEventListener('keydown', (tecla) => {
  historicoTeclas += tecla.key.toLowerCase();
  if (historicoTeclas.length > 6) { 
    historicoTeclas = historicoTeclas.slice(-6);
  }
  if (historicoTeclas === 'admphp') {
    alert('Você não quer isso...');
    window.location.href = "./Pages/adm.php";
    historicoTeclas = '';
  }
});

function sair(){
    localStorage.setItem('Logado', 'false');
    localStorage.removeItem('nomeUsuario');
    localStorage.removeItem('urlImagem67');
    window.location.href = "./index.html";
}

