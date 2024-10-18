document.addEventListener("DOMContentLoaded", function() {
    const menuContainer = document.getElementById("menuContainer");
    const openBtn = document.getElementById("openBtn");

    // Inicializa o menu como oculto
    menuContainer.style.display = "none"; 

    // Adiciona o evento de clique ao botão
    openBtn.addEventListener("click", toggleMenu);

    function toggleMenu() {
        const isMenuVisible = menuContainer.classList.contains('show');

        if (!isMenuVisible) {
            menuContainer.style.display = "block"; // Exibe o menu
            setTimeout(() => {
                menuContainer.classList.add('show'); // Adiciona a classe show
                document.body.classList.add('menu-open'); // Encolhe o conteúdo
            }, 10); // Atraso para transição
        } else {
            menuContainer.classList.remove('show'); // Remove a classe show
            document.body.classList.remove('menu-open'); // Remove o encolhimento do conteúdo
            setTimeout(() => {
                menuContainer.style.display = "none"; // Oculta o menu
            }, 300); // Sincroniza com a animação
        }
    }
});
