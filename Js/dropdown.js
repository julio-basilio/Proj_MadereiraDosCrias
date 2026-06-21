document.addEventListener("DOMContentLoaded", function () {
    const opcaoPaginas = document.querySelector(".opcao");
    const dropdown = document.querySelector(".dropdown");

    if (opcaoPaginas && dropdown) {
        let timeout;

        opcaoPaginas.addEventListener("mouseenter", () => {
            clearTimeout(timeout);
            dropdown.style.setProperty("display", "block", "important");
        });

        opcaoPaginas.addEventListener("mouseleave", () => {
            timeout = setTimeout(() => {
                dropdown.style.removeProperty("display");
            }, 1000);
        });

      
        dropdown.addEventListener("mouseenter", () => {
            clearTimeout(timeout);
            dropdown.style.setProperty("display", "block", "important");
        });

        dropdown.addEventListener("mouseleave", () => {
            dropdown.style.removeProperty("display");
        });
    }
});