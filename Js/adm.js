document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('admLogin');
    

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        

        
        const nomeUsuario = document.getElementById("nome").value;
        const senhaUsuario = document.getElementById("senha").value;
        

        try {
            const enviarDados = await fetch('ADMController.php', {
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