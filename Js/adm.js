document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('admLogin');
    

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        

        
        const nomeUsuario = document.getElementById("nome").value.toLowerCase();
        const senhaUsuario = document.getElementById("senha").value.toLowerCase();
        

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