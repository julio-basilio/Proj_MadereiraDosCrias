document.addEventListener('DOMContentLoaded', () => {
    // Pega o nome do ADM
    const nome = localStorage.getItem('nomeADM')?.toUpperCase();
    const div = document.getElementById('nomeAdm');
    
    if (div && nome) {
        div.textContent = nome;
    }

    // Pega a string do localStorage
    const dadosUsuarioString = localStorage.getItem('DadosUsuario');

    if (dadosUsuarioString) {
        try {
            const DadosUsuario = JSON.parse(dadosUsuarioString);
            
            // Verifica se a estrutura tem .dados ou se o nome está direto no objeto
            const nomeUsuario = DadosUsuario.dados?.nome || DadosUsuario.nome;
            
            if (nomeUsuario) {
                alert(`Bem-vindo, ${nomeUsuario}!`);
            }
        } catch (erro) {
            console.error("Erro ao converter os dados do usuário:", erro);
        }
    }
});