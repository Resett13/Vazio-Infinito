document.addEventListener("DOMContentLoaded", function() {
    // Inicializa o menu como oculto
    var menuContainer = document.getElementById("menuContainer");
    menuContainer.style.display = "none"; // Oculta o menu inicialmente

    // Exibir ou ocultar o menu lateral ao clicar no botão
    document.getElementById("openBtn").addEventListener("click", function() {
        if (menuContainer.style.display === "none") {
            // Menu está fechado, então abrimos
            menuContainer.style.display = "block"; // Exibe o menu
            setTimeout(() => {
                menuContainer.classList.add('show'); // Adiciona a classe show após exibir
                document.body.classList.add('menu-open'); // Adiciona o encolhimento do conteúdo
            }, 10); // Adiciona um pequeno atraso para garantir a transição
        } else {
            // Menu está aberto, então fechamos
            menuContainer.classList.remove('show'); // Remove a classe show
            document.body.classList.remove('menu-open'); // Remove o encolhimento do conteúdo
            setTimeout(() => {
                menuContainer.style.display = "none"; // Oculta o menu após a animação
            }, 300); // Sincroniza com a animação de transição
        }
    });
});
