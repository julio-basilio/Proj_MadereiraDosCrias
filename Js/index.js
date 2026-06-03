 // Button Click Handlers
       
        document.getElementById('cartBtn').addEventListener('click', () => {
            console.log('Carrinho clicado');
            alert('Carrinho será implementado');
        });

        // Smooth scroll for nav links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#home') {
                    return;
                }
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
