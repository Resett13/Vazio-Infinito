const openBtn = document.getElementById('openBtn');
const menuContainer = document.getElementById('menuContainer');
const content = document.querySelector('.content');

openBtn.addEventListener('click', () => {
    // Alterna a classe para mostrar ou esconder o menu
    menuContainer.classList.toggle('show'); // Adiciona ou remove a classe 'show'

    if (menuContainer.classList.contains('show')) {
        content.style.marginLeft = '250px'; // Ajusta o conteúdo quando o menu é mostrado
    } else {
        content.style.marginLeft = '0'; // Restaura o conteúdo quando o menu é escondido
    }
});
