// Executa de forma autônoma e imediata ao carregar qualquer página que o inclua
document.addEventListener('DOMContentLoaded', () => {
    // 1. Procura a divName presente no cabeçalho do HTML atual
    const divName = document.getElementById('divName');
    
    // 2. Acessa o armazenamento global para pegar o nome salvo
    const nomeGlobal = localStorage.getItem('nomeUsuarioGlobal');
    
    // 3. Se a div existir na tela e tivermos um nome guardado, injeta o valor
    if (divName && nomeGlobal) {
        divName.textContent = nomeGlobal;
    }
});
