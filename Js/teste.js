document.addEventListener('DOMContentLoaded', () => {
    const nome = localStorage.getItem('nomeUsuario').toUpperCase();
    const email = localStorage.getItem('emailUsuario');

    const divNavbar = document.getElementById('nomeUsuario');
    if (divNavbar && nome) {
        divNavbar.textContent = nome;
    }

    const divNome = document.getElementById('nomeContato');
    const divEmail = document.getElementById('emailUsuario');

    if (divNome && nome) {
        divNome.textContent = nome;
    }

    if (divEmail && email) {
        divEmail.textContent = email;
    }
});