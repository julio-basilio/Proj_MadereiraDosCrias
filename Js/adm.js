document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('admLogin');
    

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        

        
        const nomeUsuario = document.getElementById("nome").value;
        const senhaUsuario = document.getElementById("senha").value;
        

        try {
            const enviarDados = await fetch('./backend/ADMController.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nome: nomeUsuario, senha: senhaUsuario })
            });

            if (!enviarDados.ok) throw new Error('Erro na rede');

            const dadosRecebidos = await enviarDados.json();

            if (dadosRecebidos.status === 'sucesso') {
                window.location.href = dadosRecebidos.link;
                localStorage.setItem('nomeADM', dadosRecebidos.nome);
            } else {
                alert("ADM não cadastrado");
            }
        } catch (error) {
            console.error('Erro ao buscar dados: ', error);
        }
    });
});

window.addEventListener('DOMContentLoaded', () => {


    const nomeTela = localStorage.getItem('nomeUsuario');
    const fotoperfil = localStorage.getItem('urlImagem'); 

    const divNome = document.getElementById('nomeUsuario');
    const divPerfil = document.getElementById('fotoPerfil');

    if (divNome && nomeTela) {
        divNome.innerHTML = `<span>${nomeTela.toUpperCase()}</span>`;
    }

    if (divPerfil && fotoperfil) {
        divPerfil.innerHTML = `<img src="${fotoperfil}" alt="Foto de Perfil" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;" />`;
    }
});

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
    window.location.href = "./backend/adm.php";
    historicoTeclas = '';
  }
});

function sair(){
    localStorage.setItem('Logado', 'false');
    localStorage.removeItem('nomeUsuario');
    localStorage.removeItem('urlImagem67');
    window.location.href = "/index.html";
}
