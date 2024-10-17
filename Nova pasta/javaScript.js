document.addEventListener("DOMContentLoaded", function() {
    var menuContainer = document.getElementById("menuContainer");
    menuContainer.style.display = "none"; // Oculta o menu inicialmente

    document.getElementById("openBtn").addEventListener("click", function() {
        if (menuContainer.style.display === "none") {
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
    });
});
